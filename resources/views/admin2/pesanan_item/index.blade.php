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
                            <th>nama</th>
                            <th>total</th>
                            <th>jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>nama</th>
                            <th>total</th>
                            <th>jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $pesananitem as $pesanan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pesanan->nama}}</td>
                                <td>{{$pesanan->total}}</td>
                                <td>{{$pesanan->qty}}</td>
                                <td>{{$pesanan->harga}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
