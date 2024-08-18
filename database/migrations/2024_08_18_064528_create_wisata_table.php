<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('deskripsi');
            $table->string('akses', 100);
            $table->string('lokasi', 50);
            $table->string('gambar_wisata')->nullable();
            $table->string('deskripsi_aktifitas', 250)->nullable();
            $table->string('gambar_aktifitas')->nullable();
            $table->string('akomodasi', 150)->nullable();
            $table->string('umkm',)->nullable();
            $table->string('fasilitas_umum', 200)->nullable();
            $table->string('icon')->nullable();
            $table->decimal('harga_tiket', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
