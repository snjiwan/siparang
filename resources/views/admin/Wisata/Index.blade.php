@extends('admin.layout.appadmin')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tempat Wisata</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <div class="input-group-append">
                      <a href="{{ route('createwisata')}}" class="btn btn-primary float-right" style="margin-right: 10px">
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
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> 2 </td>
                        <td> 3 </td>
                        <td>
                        <a href="{{route('editwisata')}}"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href=""><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        @endsection