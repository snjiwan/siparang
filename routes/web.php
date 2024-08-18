<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


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

// Menampilkan daftar wisata
Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
// Menampilkan form untuk menambahkan wisata baru
Route::get('/wisata/create', [WisataController::class, 'create'])->name('createwisata');
// Menyimpan wisata baru
Route::post('/wisata', [WisataController::class, 'store'])->name('wisata.store');
// Menampilkan form untuk mengedit wisata
Route::get('/wisata/{id}/edit', [WisataController::class, 'edit'])->name('editwisata');
// Memperbarui wisata
Route::put('/wisata/{id}', [WisataController::class, 'update'])->name('wisata.update');
// Menghapus wisata
Route::delete('/wisata/{id}', [WisataController::class, 'destroy'])->name('wisata.destroy');

Route::get('/destination', [ReadController::class, 'index']);
Route::get('/activity', [ActivityController::class, 'index']);