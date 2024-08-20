<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
use App\Models\event;

class BerandaController extends Controller
{
    public function index(){

        $wisata = Wisata::all();
        $kegiatan = event::all();
        return view ('beranda', compact('wisata','kegiatan'));
    }
}