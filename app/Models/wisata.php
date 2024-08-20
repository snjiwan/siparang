<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';

    protected $fillable = [
        'nama',
        'deskripsi',
        'akses',
        'lokasi',
        'gambar_wisata',
        'deskripsi_aktifitas',
        'gambar_aktifitas',
        'akomodasi',
        'umkm',
        'fasilitas_umum',
        'icon',
        'harga_tiket',
    ];

    protected $casts = [
        'harga_tiket' => 'decimal:2',
    ];
}
