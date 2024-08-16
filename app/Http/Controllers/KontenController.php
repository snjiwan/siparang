<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;
// use RealRashid\SweetAlert\Facades\Alert;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.konten.index');
    }
}
