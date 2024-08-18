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
    public function index()
    {
        $events = event::all();
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
            'wisata' => 'required',
            'nama_kegiatan' => 'required',
            'kegiatan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $imagePath = null;
            if ($request->hasFile('gambar')) {
                $imagePath = $request->file('gambar')->store('images', 'public'); // Simpan gambar di folder 'storage/app/public/images'
            }

            event::create([
                'id_wisata' => $request->wisata,
                'nama_kegiatan' => $request->nama_kegiatan,
                'kegiatan' => $request->kegiatan,
                'gambar' => $imagePath,
            ]);
        return redirect()->route('admin.kegiatan.index')->with('success', 'Post created successfully.');
    }

    public function edit()
    {
        //
    //     $kelas = Kelas::all()->where('id',$id);
        return view('admin.kegiatan.edit');
    }
}
