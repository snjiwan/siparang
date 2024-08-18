@extends('admin.layout.appadmin')
@section('content')



<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Kegiatan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Menggunakan PUT untuk update data -->
        <div class="card-body">
            <div class="form-group">
                <label for="id_wisata">Pilih Wisata</label>
                <select class="form-control" name="id_wisata" id="id_wisata">
                    @foreach($wisata as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $kegiatan->id_wisata ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{ $kegiatan->nama_kegiatan }}">
            </div>
            <div class="form-group">
                <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                <input type="text" class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" placeholder="Deskripsi Kegiatan" value="{{ $kegiatan->deskripsi_kegiatan }}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <!-- Menampilkan gambar saat ini jika ada -->
                @if ($kegiatan->gambar)
                    <div class="mt-3">
                        <p>Gambar Saat Ini:</p>
                        <img src="{{ asset('images/kegiatan/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->nama_kegiatan }}" width="200">
                    </div>
                @endif
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>


@endsection