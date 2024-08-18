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
                    <label>Wisata</label>
                    <input type="text" class="form-control" id="wisata" placeholder="Wisata">
                  </div>
                  <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi Kegiatan</label>
                    <input type="text" class="form-control" id="deskripsi_kegiatan" placeholder="Deskripsi Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Dokumentasi Kegiatan</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection