<?php

namespace App\Http\Controllers;
use App\Models\event;
use App\Models\wisata;

use Illuminate\Http\Request;

class AdminController extends Controller
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
    
    public function index(){
        // Hitung total kegiatan
        $totalKegiatan = event::count();
        // Hitung total wisata
        $totalWisata = wisata::count();

        // Kirimkan data ke view
        return view('admin.dashboard', compact('totalKegiatan', 'totalWisata'));
    }
}