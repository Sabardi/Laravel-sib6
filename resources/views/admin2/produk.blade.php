@extends('admin2.layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $jenis as $jenis)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <<td>{{$p->kode}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->harga_beli}}</td>
                                <td>{{$p->harga_jual}}</td>
                                <td>{{$p->stok}}</td>
                                <td>{{$p->min_stok}}</td>
                                <td>{{$p->jenis}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
