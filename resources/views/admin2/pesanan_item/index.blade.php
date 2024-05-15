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
                            <th>Tanggal</th>
                            <th>total</th>
                            <th>nama</th>
                            <th>harga_beli</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>total</th>
                            <th>nama</th>
                            <th>harga_beli</th>
                            <th>Stok</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $pesananitem as $pesanan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pesanan->tanggal}}</td>
                                <td>{{$pesanan->total}}</td>
                                <td>{{$pesanan->jenis}}</td>
                                <td>{{$pesanan->harga_beli}}</td>
                                <td>{{$pesanan->stok}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
