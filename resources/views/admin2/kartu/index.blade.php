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
                            <th>kode</th>
                            <th>Nama</th>
                            <th>diskon</th>
                            <th>iurran</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>kode</th>
                            <th>Nama</th>
                            <th>diskon</th>
                            <th>iurran</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $kartu as $kartu)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$kartu->kode}}</td>
                                <td>{{$kartu->nama}}</td>
                                <td>{{$kartu->diskon}}</td>
                                <td>{{$kartu->iuran}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
