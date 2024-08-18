@extends('admin.layout.appadmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tempat Wisata</h3>
                <div class="card-tools">
                    <form action="{{ route('wisata') }}" method="GET" class="input-group input-group-sm">
                        <div class="input-group-append">
                            <a href="{{ route('createwisata') }}" class="btn btn-primary float-right" style="margin-right: 10px">
                                <i class="fa-solid fa-plus"></i> 
                            </a>
                        </div>
                        <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request()->get('search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
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
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Akses</th>
                            <th>Lokasi</th>
                            <th>Gambar Wisata</th>
                            <th>Deskripsi Aktivitas</th>
                            <th>Gambar Aktivitas</th>
                            <th>Akomodasi</th>
                            <th>UMKM</th>
                            <th>Fasilitas Umum</th>
                            <th>Icon</th>
                            <th>Harga Tiket</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($wisatas as $wisata)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $wisata->nama }}</td>
                                <td>{{ $wisata->deskripsi }}</td>
                                <td>{{ $wisata->akses }}</td>
                                <td>{{ $wisata->lokasi }}</td>
                                <td>
                                    @if ($wisata->gambar_wisata)
                                        <img src="{{ asset('images/wisata/' . $wisata->gambar_wisata) }}" alt="{{ $wisata->nama }}" width="100">
                                    @else
                                        <span>Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td>{{ $wisata->deskripsi_aktifitas }}</td>
                                <td>
                                    @if ($wisata->gambar_aktifitas)
                                        <img src="{{ asset('images/aktifitas/' . $wisata->gambar_aktifitas) }}" alt="{{ $wisata->nama }}" width="100">
                                    @else
                                        <span>Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td>{{ $wisata->akomodasi }}</td>
                                <td>{{ $wisata->umkm }}</td>
                                <td>{{ $wisata->fasilitas_umum }}</td>
                                <td>
                                    @if ($wisata->icon)
                                        <img src="{{ asset('images/icons/' . $wisata->icon) }}" alt="{{ $wisata->nama }}" width="30">
                                    @else
                                        <span>Tidak ada icon</span>
                                    @endif
                                </td>
                                <td>{{ $wisata->harga_tiket ? number_format($wisata->harga_tiket, 2) : 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('editwisata', $wisata->id) }}">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                    <form action="{{ route('wisata.destroy', $wisata->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus wisata ini?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="14">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
