@extends('admin.layout.appadmin')
@section('content')



<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Kegiatan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="id_wisata">Pilih Wisata</label>
                <select class="form-control" name="id_wisata" id="id_wisata">
                    <option value="" disabled selected>Pilih Wisata</option>
                    @foreach($wisata as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan">
            </div>
            <div class="form-group">
                <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                <input type="text" class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" placeholder="Deskripsi Kegiatan">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection