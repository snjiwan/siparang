<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class ActivityController extends Controller
{
    public function index($id){
        $kegiatan = event::find($id);
        

        // Periksa apakah artikel ditemukan
        if (!$kegiatan) {
            return redirect('/beranda')->with('error', 'Artikel tidak ditemukan');
        }
        return view ('activity.index', compact('kegiatan'));
    }
}