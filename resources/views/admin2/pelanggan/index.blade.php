@extends('admin2.layouts.main')
@section('content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambahkan isi produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Input Jenis Produk">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- penambahan modal --}}

    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pelanggan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- Button trigger modal -->

                <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">
                    <i class="fa-solid fa-square-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode</th>
                            <th>Nama</th>
                            <th>jenis kelamin</th>
                            <th>tempat lahir</th>
                            <th>tanggal Lahir</th>
                            <th>kartu</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>kode</th>
                            <th>Nama</th>
                            <th>jenis kelamin</th>
                            <th>tempat lahir</th>
                            <th>tanggal Lahir</th>
                            <th>kartu</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $pelanggan as $pelanggan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pelanggan->kode}}</td>
                                <td>{{$pelanggan->nama}}</td>
                                <td>{{$pelanggan->jk}}</td>
                                <td>{{$pelanggan->tmp_lahir}}</td>
                                <td>{{$pelanggan->tgl_lahir}}</td>
                                <td>{{$pelanggan->kartu->nama}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
