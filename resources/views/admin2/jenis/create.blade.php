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
            <form action="{{ url('admin/jenis_produk/store') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Input Jenis Produk">
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{'admin/jenis'}} ">Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
{{-- penambahan modal --}}



    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">

            <div class="card-body">
                
            </div>
        </div>
    </div>
@endsection
