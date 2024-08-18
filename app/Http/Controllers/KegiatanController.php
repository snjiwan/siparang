<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;
// use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        

        $events = event::all();
        $query = event::query();

    if ($request->has('search')) {
        $search = $request->search;
        $query->where('nama_kegiatan', 'LIKE', "%{$search}%")
              ->orWhere('deskripsi_kegiatan', 'LIKE', "%{$search}%");
    }

        $events = $query->latest()->get();
        return view('admin.kegiatan.index', compact('events'));
        
    }

    public function create()
    {
        //
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_wisata' => 'required',
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi_kegiatan' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Logika untuk menyimpan data
        try {
            $gambarName = null;
            if ($request->hasFile('gambar')) {
                $gambarName = time() . '.' . $request->gambar->extension();
                $request->gambar->move(public_path('images/kegiatan'), $gambarName);
            }
    
            event::create([
                'id_wisata' => $request->id_wisata,
                'nama_kegiatan' => $request->nama_kegiatan,
                'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
                'gambar' => $gambarName,
            ]);
    
            return redirect()->route('kegiatan')->with('success', 'Kegiatan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $kegiatan = event::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    // Fungsi untuk update data
    public function update(Request $request, $id)
    {
        $kegiatan = event::findOrFail($id); // Ambil data kegiatan berdasarkan ID

        // Validasi input
        $request->validate([
            'id_wisata' => 'required|string|max:255',
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi_kegiatan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Logika untuk handle upload gambar baru
        $gambarName = $kegiatan->gambar; // Tetap gunakan gambar lama jika tidak ada gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambarName && file_exists(public_path('images/kegiatan/' . $gambarName))) {
                unlink(public_path('images/kegiatan/' . $gambarName));
            }

            // Simpan gambar baru
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images/kegiatan'), $gambarName);
        }

        // Update data kegiatan
        $kegiatan->update([
            'id_wisata' => $request->id_wisata,
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('kegiatan')->with('success', 'Kegiatan berhasil diupdate.');
    }

    public function destroy($id) {
        // Temukan data kegiatan berdasarkan ID
    $kegiatan = event::findOrFail($id);

    // Cek jika data memiliki gambar
    if ($kegiatan->gambar) {
        $gambarPath = public_path('images/kegiatan/' . $kegiatan->gambar);

        // Hapus file gambar jika ada
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }
    }

    // Hapus data dari database
    $kegiatan->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('kegiatan')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
