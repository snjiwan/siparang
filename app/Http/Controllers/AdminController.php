<?php

namespace App\Http\Controllers;
use App\Models\event;

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

        // Kirimkan data ke view
        return view('admin.dashboard', compact('totalKegiatan'));
    }
}