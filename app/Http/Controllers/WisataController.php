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
        return view('admin.wisata.index');
    }

    public function create()
    {
        //
        return view('admin.wisata.create');
    }

    public function edit()
    {
        //
        // $kelas = Kelas::all()->where('id',$id);
        return view('admin.wisata.edit');
    }
}
