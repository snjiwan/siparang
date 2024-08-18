<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\ActivityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BerandaController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
// Route::get('/konten', [KontenController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/destination', [ReadController::class, 'index']);
Route::get('/activity', [ActivityController::class, 'index']);