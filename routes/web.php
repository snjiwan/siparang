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

// Kegiatan
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
// Route untuk menyimpan kegiatan baru
Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
// Route untuk menghapus kegiatan
Route::delete('/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
// Route untuk menampilkan form tambah kegiatan
Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('createkegiatan');
// Route untuk menampilkan form edit kegiatan
Route::get('/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
// Route untuk memperbarui data kegiatan
Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');



Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/wisata/create', [WisataController::class, 'create'])->name('createwisata');
Route::get('/wisata/edit', [WisataController::class, 'edit'])->name('editwisata');
Route::get('/destination', [ReadController::class, 'index']);
Route::get('/activity', [ActivityController::class, 'index']);