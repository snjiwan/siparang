<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;
// use RealRashid\SweetAlert\Facades\Alert;

class WisataController extends Controller
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
    public function index()
    {
         // Mengambil semua data dari model Wisata
         $wisatas = Wisata::all();

         // Mengirimkan data ke view
         return view('admin.wisata.index', compact('wisatas'));
    }

    public function create()
    {
        //
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari form
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'akses' => 'required|string|max:100',
            'lokasi' => 'required|string|max:50',
            'gambar_wisata' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_aktifitas' => 'nullable|string|max:250',
            'gambar_aktifitas' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'akomodasi' => 'nullable|string|max:150',
            'umkm' => 'nullable|string',
            'fasilitas_umum' => 'nullable|string|max:200',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_tiket' => 'nullable|numeric'
        ]);

        // Buat data wisata baru
        $wisata = new Wisata();
        $wisata->nama = $request->input('nama');
        $wisata->deskripsi = $request->input('deskripsi');
        $wisata->akses = $request->input('akses');
        $wisata->lokasi = $request->input('lokasi');

        // Proses upload gambar wisata jika ada
        if ($request->hasFile('gambar_wisata')) {
            $gambarWisata = $request->file('gambar_wisata')->store('images/wisata', 'public');
            $wisata->gambar_wisata = basename($gambarWisata);
        }

        // Proses upload gambar aktifitas jika ada
        if ($request->hasFile('gambar_aktifitas')) {
            $gambarAktifitas = $request->file('gambar_aktifitas')->store('images/wisata', 'public');
            $wisata->gambar_aktifitas = basename($gambarAktifitas);
        }

        // Proses upload icon jika ada
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->store('images/icons', 'public');
            $wisata->icon = basename($icon);
        }

        // Simpan data lainnya
        $wisata->deskripsi_aktifitas = $request->input('deskripsi_aktifitas');
        $wisata->akomodasi = $request->input('akomodasi');
        $wisata->umkm = $request->input('umkm');
        $wisata->fasilitas_umum = $request->input('fasilitas_umum');
        $wisata->harga_tiket = $request->input('harga_tiket');

        // Simpan data wisata ke database
        $wisata->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('wisata')->with('success', 'Data wisata berhasil ditambahkan.');
    }



    public function edit($id)
    {
        // Mencari data wisata berdasarkan ID
        $wisata = wisata::findOrFail($id);
    
        // Menampilkan view edit dengan data wisata
        return view('admin.wisata.edit', compact('wisata'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan dari form
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'akses' => 'required|string|max:100',
            'lokasi' => 'required|string|max:50',
            'gambar_wisata' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_aktifitas' => 'nullable|string|max:250',
            'gambar_aktifitas' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'akomodasi' => 'nullable|string|max:150',
            'umkm' => 'nullable|string',
            'fasilitas_umum' => 'nullable|string|max:200',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_tiket' => 'nullable|numeric'
        ]);

        // Ambil data wisata berdasarkan ID
        $wisata = wisata::findOrFail($id);

        // Update data wisata dengan data dari form
        $wisata->nama = $request->input('nama');
        $wisata->deskripsi = $request->input('deskripsi');
        $wisata->akses = $request->input('akses');
        $wisata->lokasi = $request->input('lokasi');

        // Proses upload gambar wisata jika ada
        if ($request->hasFile('gambar_wisata')) {
            // Hapus gambar lama jika ada
            if ($wisata->gambar_wisata) {
                Storage::delete('public/images/wisata/' . $wisata->gambar_wisata);
            }

            // Simpan gambar baru
            $gambarWisata = $request->file('gambar_wisata')->store('public/images/wisata');
            $wisata->gambar_wisata = basename($gambarWisata);
        }

        // Proses upload gambar aktifitas jika ada
        if ($request->hasFile('gambar_aktifitas')) {
            // Hapus gambar lama jika ada
            if ($wisata->gambar_aktifitas) {
                Storage::delete('public/images/wisata/' . $wisata->gambar_aktifitas);
            }

            // Simpan gambar baru
            $gambarAktifitas = $request->file('gambar_aktifitas')->store('public/images/wisata');
            $wisata->gambar_aktifitas = basename($gambarAktifitas);
        }

        // Proses upload icon jika ada
        if ($request->hasFile('icon')) {
            // Hapus icon lama jika ada
            if ($wisata->icon) {
                Storage::delete('public/images/icons/' . $wisata->icon);
            }

            // Simpan icon baru
            $icon = $request->file('icon')->store('public/images/icons');
            $wisata->icon = basename($icon);
        }

        // Update data lainnya
        $wisata->deskripsi_aktifitas = $request->input('deskripsi_aktifitas');
        $wisata->akomodasi = $request->input('akomodasi');
        $wisata->umkm = $request->input('umkm');
        $wisata->fasilitas_umum = $request->input('fasilitas_umum');
        $wisata->harga_tiket = $request->input('harga_tiket');

        // Simpan perubahan
        $wisata->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('wisata')->with('success', 'Data wisata berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Cari data wisata berdasarkan ID
        $wisata = wisata::findOrFail($id);

        // Hapus gambar wisata jika ada
        if ($wisata->gambar_wisata) {
            Storage::delete('public/images/wisata/' . $wisata->gambar_wisata);
        }

        // Hapus gambar aktifitas jika ada
        if ($wisata->gambar_aktifitas) {
            Storage::delete('public/images/wisata/' . $wisata->gambar_aktifitas);
        }

        // Hapus icon jika ada
        if ($wisata->icon) {
            Storage::delete('public/images/icons/' . $wisata->icon);
        }

        // Hapus data wisata dari database
        $wisata->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('wisata')->with('success', 'Data wisata berhasil dihapus.');
    }

    
}
