<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
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
        return view('admin.kegiatan.index');
    }
}
