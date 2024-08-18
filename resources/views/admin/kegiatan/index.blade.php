@extends('admin.layout.appadmin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kegiatan</h3>
                <div class="card-tools">
                  <form action="{{ route('kegiatan') }}" method="GET">
                      <div class="input-group input-group-sm">
                          <div class="input-group-append">
                              <a href="{{ route('createkegiatan') }}" class="btn btn-primary float-right" style="margin-right: 10px">
                                  <i class="fa-solid fa-plus"></i>
                              </a>
                          </div>
                          <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request()->search }}">
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                  <i class="fas fa-search"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Dokumentasi Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($event->gambar)
                                    <img src="{{ asset('images/kegiatan/' . $event->gambar) }}" alt="{{ $event->nama_kegiatan }}" width="100">
                                @else
                                    <span>Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $event->nama_kegiatan }}</td>
                            <td>{{ $event->deskripsi_kegiatan }}</td>
                            <td>
                                <a href="{{ route('kegiatan.edit', $event->id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <form action="{{ route('kegiatan.destroy', $event->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
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
