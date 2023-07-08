@extends('layout.master')

@section('judul','Form Tambah Data Siswa')
@section('title','Form Tambah Data Siswa')

@section('content')
<div class="card">
    <div class="card-header">


      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <form method="POST" action="/siswa">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NIS</label>
              <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                <input type="number" name="jurusan" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer-->
  </div>
@endsection
