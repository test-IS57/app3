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
                <th scope="col">Kode</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($jurusan as $data)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$data->kode}}</td>
                    <td>{{$data->jurusan}}</td>
                    <td><a href="/siswa/edit/{{$data->id}}" class="btn btn-info btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default{{$data->id}}">
                            Hapus
                          </button>

                          <div class="modal fade" id="modal-default{{$data->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Peringatan</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Yakin Data {{$data->nama}} Ingin Dihapus?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <form method="POST" action="/siswa/{{$data->id}}">
                                        @method('DELETE')
                                        @csrf
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </td>

                  </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="6">Tidak Ada Data</td>
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
