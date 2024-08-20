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
    public function index(Request $request)
    {
        // Ambil nilai pencarian dari input
        $search = $request->input('search');
    
        // Query untuk mengambil data wisata
        $wisatas = Wisata::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('deskripsi', 'like', '%' . $search . '%')
                         ->orWhere('lokasi', 'like', '%' . $search . '%');
        })->paginate(10); // Tambahkan pagination jika diperlukan
    
        // Mengirimkan data ke view
        return view('admin.wisata.index', compact('wisatas', 'search'));
    }

    public function create()
    {
        //
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
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

        // Logika untuk menyimpan data
        try {
            // Proses upload gambar wisata
            $gambarWisataName = null;
            if ($request->hasFile('gambar_wisata')) {
                $gambarWisataName = time() . '_wisata.' . $request->gambar_wisata->extension();
                $request->gambar_wisata->move(public_path('images/wisata'), $gambarWisataName);
            }

            // Proses upload gambar aktifitas
            $gambarAktifitasName = null;
            if ($request->hasFile('gambar_aktifitas')) {
                $gambarAktifitasName = time() . '_aktifitas.' . $request->gambar_aktifitas->extension();
                $request->gambar_aktifitas->move(public_path('images/wisata'), $gambarAktifitasName);
            }

            // Proses upload icon
            $iconName = null;
            if ($request->hasFile('icon')) {
                $iconName = time() . '_icon.' . $request->icon->extension();
                $request->icon->move(public_path('images/icons'), $iconName);
            }

            // Simpan data ke dalam database
            Wisata::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'akses' => $request->akses,
                'lokasi' => $request->lokasi,
                'gambar_wisata' => $gambarWisataName,
                'deskripsi_aktifitas' => $request->deskripsi_aktifitas,
                'gambar_aktifitas' => $gambarAktifitasName,
                'akomodasi' => $request->akomodasi,
                'umkm' => $request->umkm,
                'fasilitas_umum' => $request->fasilitas_umum,
                'icon' => $iconName,
                'harga_tiket' => $request->harga_tiket,
            ]);

            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('wisata')->with('success', 'Data wisata berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tangani error jika terjadi
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
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
        // Temukan data wisata berdasarkan ID
        $wisata = wisata::findOrFail($id);

        // Cek jika data memiliki gambar wisata
        if ($wisata->gambar_wisata) {
            $gambarWisataPath = public_path('images/wisata/' . $wisata->gambar_wisata);

            // Hapus file gambar wisata jika ada
            if (file_exists($gambarWisataPath)) {
                unlink($gambarWisataPath);
            }
        }

        // Cek jika data memiliki gambar aktifitas
        if ($wisata->gambar_aktifitas) {
            $gambarAktifitasPath = public_path('images/wisata/' . $wisata->gambar_aktifitas);

            // Hapus file gambar aktifitas jika ada
            if (file_exists($gambarAktifitasPath)) {
                unlink($gambarAktifitasPath);
            }
        }

        // Cek jika data memiliki icon
        if ($wisata->icon) {
            $iconPath = public_path('images/icons/' . $wisata->icon);

            // Hapus file icon jika ada
            if (file_exists($iconPath)) {
                unlink($iconPath);
            }
        }

        // Hapus data dari database
        $wisata->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('wisata')->with('success', 'Data wisata berhasil dihapus.');
    }

    
}
