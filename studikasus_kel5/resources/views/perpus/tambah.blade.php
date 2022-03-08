@extends('layout/master')

@section('konten')
<div class="container">
  <p class="mt-5"><b>Tambah Data </b></p>
    <form action="Mahasiswa/tambah" method="POST" style="margin-top: 2%;">
        {{ csrf_field() }}
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">nama</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">nim</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="nim" name="nim">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">email</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-1 col-form-label">jurusan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
          </div>

          <input type="submit" class="btn btn-success" value="Simpan" id="Simpan">
    </form>
</div>


@endsection