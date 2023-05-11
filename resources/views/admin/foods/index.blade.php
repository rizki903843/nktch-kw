@extends('admin.layouts.app')
@section('title', 'Data Makanan')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Makanan</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('admin.foods.tambah') }}" class="btn btn-primary mb-3" >Tambah Makanan</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto Makanan</th>
                        <th>Nama Makanan</th>
                        <th>Kategori Makanan</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($foods as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>
                                @if ($row->photo != null)
                                    <div style="width:200px">
                                        <img src="{{ asset('storage/' . $row->photo) }}" class="img-fluid" alt="...">
                                    </div>
                                @else
                                    <p class="text-info">tidak ada foto</p>
                                @endif

                            </td>

                            <td>{{ $row->nama_makanan }}</td>
                            <td>{{ $row->kategori_makanan }}</td>
                            <td>{{ $row->stok }}</td>
                            <td>{{ $row->harga}}</td>

                            <td>
                                <a href="{{ route('admin.foods.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('admin.foods.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
