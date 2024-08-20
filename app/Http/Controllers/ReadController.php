<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;


class ReadController extends Controller
{
    public function index($id){
        $wisata = Wisata::find($id);
        

        // Periksa apakah artikel ditemukan
        if (!$wisata) {
            return redirect('/beranda')->with('error', 'Artikel tidak ditemukan');
        }
        return view ('destination.index', compact('wisata'));
    }
}