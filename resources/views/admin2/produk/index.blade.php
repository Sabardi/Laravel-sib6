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
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga jual</th>
                            <th>Stok</th>
                            <th>Minimal stok</th>
                            <th>Jenis produk</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga jual</th>
                            <th>Stok</th>
                            <th>Minimal stok</th>
                            <th>Jenis produk</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $produk as $produk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$produk->kode}}</td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->harga_beli}}</td>
                                <td>{{$produk->harga_jual}}</td>
                                <td>{{$produk->stok}}</td>
                                <td>{{$produk->jenis}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
