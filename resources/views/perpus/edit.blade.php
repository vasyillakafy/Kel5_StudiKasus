@extends('layout/master')

@section('konten')
<div class="container">
  <p class="mt-5"><b>Edit Data </b></p>

  @foreach($maha as $mE)
    <form action="{{ url("Mahasiswa/update/".$mE->id) }}" method="POST" style="margin-top: 2%;">
        {{ csrf_field() }}
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">nama</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="nama" name="nama" value="{{ $mE->nama }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">nim</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="nim" name="nim" value="{{ $mE->nim }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-1 col-form-label">email</label>
            <div class="col-sm-3">
              <input type="text"class="form-control" id="email" name="email" value="{{ $mE->email }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-1 col-form-label">jurusan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mE->jurusan}}">
            </div>
          </div>

          <input type="submit" class="btn btn-success" value="Simpan" id="Simpan" name="simpan">
    </form>
    @endforeach
</div>


@endsection