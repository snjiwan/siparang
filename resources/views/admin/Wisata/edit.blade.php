@extends('admin.layout.appadmin')

@section('content')

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Tempat Wisata</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Wisata</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Wisata" value="{{ old('nama', $wisata->nama) }}">
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Deskripsi Wisata">{{ old('deskripsi', $wisata->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="akses">Akses</label>
                            <input type="text" class="form-control @error('akses') is-invalid @enderror" id="akses" name="akses" placeholder="Akses" value="{{ old('akses', $wisata->akses) }}">
                            @error('akses')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi" value="{{ old('lokasi', $wisata->lokasi) }}">
                            @error('lokasi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gambar_wisata">Gambar Wisata</label>
                            @if ($wisata->gambar_wisata)
                                <div class="mb-2">
                                    <img src="{{ asset('images/wisata/' . $wisata->gambar_wisata) }}" alt="Gambar Wisata" width="100">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('gambar_wisata') is-invalid @enderror" id="gambar_wisata" name="gambar_wisata">
                            @error('gambar_wisata')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_aktifitas">Deskripsi Aktifitas</label>
                            <textarea class="form-control @error('deskripsi_aktifitas') is-invalid @enderror" id="deskripsi_aktifitas" name="deskripsi_aktifitas" placeholder="Deskripsi Aktifitas">{{ old('deskripsi_aktifitas', $wisata->deskripsi_aktifitas) }}</textarea>
                            @error('deskripsi_aktifitas')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gambar_aktifitas">Gambar Aktifitas</label>
                            @if ($wisata->gambar_aktifitas)
                                <div class="mb-2">
                                    <img src="{{ asset('images/wisata/' . $wisata->gambar_aktifitas) }}" alt="Gambar Aktifitas" width="100">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('gambar_aktifitas') is-invalid @enderror" id="gambar_aktifitas" name="gambar_aktifitas">
                            @error('gambar_aktifitas')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="akomodasi">Akomodasi</label>
                            <input type="text" class="form-control @error('akomodasi') is-invalid @enderror" id="akomodasi" name="akomodasi" placeholder="Akomodasi" value="{{ old('akomodasi', $wisata->akomodasi) }}">
                            @error('akomodasi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="umkm">UMKM</label>
                            <input type="text" class="form-control @error('umkm') is-invalid @enderror" id="umkm" name="umkm" placeholder="UMKM" value="{{ old('umkm', $wisata->umkm) }}">
                            @error('umkm')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fasilitas_umum">Fasilitas Umum</label>
                            <input type="text" class="form-control @error('fasilitas_umum') is-invalid @enderror" id="fasilitas_umum" name="fasilitas_umum" placeholder="Fasilitas Umum" value="{{ old('fasilitas_umum', $wisata->fasilitas_umum) }}">
                            @error('fasilitas_umum')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">Icon</label>
                            @if ($wisata->icon)
                                <div class="mb-2">
                                    <img src="{{ asset('images/icons/' . $wisata->icon) }}" alt="Icon" width="100">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon">
                            @error('icon')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="harga_tiket">Harga Tiket</label>
                            <input type="number" step="0.01" class="form-control @error('harga_tiket') is-invalid @enderror" id="harga_tiket" name="harga_tiket" placeholder="Harga Tiket" value="{{ old('harga_tiket', $wisata->harga_tiket) }}">
                            @error('harga_tiket')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('wisata') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
