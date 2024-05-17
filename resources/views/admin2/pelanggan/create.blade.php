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
                <form action="#" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                        <input id="text" name="kode" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                        <input id="text1" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-4">Jenis kelamin</label>
                            <div class="col-8">
                                @foreach ($gender as $g )
                                <input type="radio" name="jk" id="">
                                <label for="">P</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text3" class="col-4 col-form-label">tanggal lahir</label>
                        <div class="col-8">
                        <input id="text3" name="tmp_lahir" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text4" class="col-4 col-form-label">tanggal lahir</label>
                        <div class="col-8">
                        <input id="text4" name="tgl_lahir" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text5" class="col-4 col-form-label">email</label>
                        <div class="col-8">
                        <input id="text5" name="email" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label">Jenis Kartu</label>
                        <div class="col-8">
                        <select id="select" name="jenis_produk_id" class="custom-select">
                            @foreach($kartu as $kartu)
                                <option value="{{$kartu->id}}">{{$kartu->nama}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
