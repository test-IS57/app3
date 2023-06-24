@extends('layout.master')

@section('judul','Data Siswa')
@section('title','Data Siswa')

@section('content')
<div class="card">
    <div class="card-header">
      <a href="{{route('addsiswa')}}" class="btn btn-info">Tambah Data</a>

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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($siswa as $data)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="4">Tidak Ada Data</td>
                  </tr>

                @endforelse

            </tbody>
          </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
@endsection
