
@extends('layout/master')
@section('konten')

<div class="container">
  <a href="tambah" class="btn btn-success mt-3 mb-2">Tambah</a>
  <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nama</th>
          <th scope="col">nim</th>
          <th scope="col">email</th>
          <th scope="col">jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
  $no=1;
      ?>
      
      @foreach($mahasiswa as $m)
      <tbody>
        <tr>
          <th scope="row">{{ $no++;  }}</th>
          <td>{{ $m->nama }}</td>
          <td>{{ $m->nim }}</td>
          <td>{{ $m->email}}</td>
          <td>{{ $m->jurusan}}</td>
          <td>
            <a href="Mahasiswa/edit/{{ $m->id }}" class="btn btn-secondary">Edit</a>
            <a href="pegawai/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
          </td>
          
          
        </tr>
  
      </tbody>
      @endforeach
    </table>

</div>

@endsection