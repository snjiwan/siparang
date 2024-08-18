<?php

namespace App\Http\Controllers;
use App\Models\event;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // Hitung total kegiatan
        $totalKegiatan = event::count();

        // Kirimkan data ke view
        return view('admin.dashboard', compact('totalKegiatan'));
    }
}