@extends('admin.layout.appadmin')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kegiatan</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <div class="input-group-append">
                      <a href="{{ route('createkegiatan')}}" class="btn btn-primary float-right" style="margin-right: 10px">
                        <i class="fa-solid fa-plus"></i> 
                     </a>
                    </div>
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kegiatan</th>
                      <th>Deskripsi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $event->nama_kegiatan }}</td>
                        <td>{{ $event->deskripsi_kegiatan }}</td>
                        <td>
                        <a href="{{route('editkegiatan', $event->id)}}"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href=""><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        @endsection