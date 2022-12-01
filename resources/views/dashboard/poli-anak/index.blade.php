@extends('dashboard.layouts.main')
@section('title','Data Pasien')
@section('container')
@if (session()->has('pesan_tambah'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert"">
  Data Berhasil di Tambahkan
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session()->has('pesan_edit'))
<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
  {{ session('pesan_edit') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session()->has('pesan_hapus'))
<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
  {{ session('pesan_hapus') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Data Poli Anak</h3>
      <a href="/polianak/create" class="btn btn-dark" ><i class="fa fa-plus"></i> Tambah Data</a>
    </div><!-- /.col -->
    <div class="col-sm-6 my-4">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active" style="text-center">Poli Anak</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div>
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Nama Ibu</th>
                      <th>Nama Ayah</th>
                      <th>Keluhan</th>
                      <th>Dokter Tujuan</th>
                      <th>Alamat</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($poli_anaks as $pa)
                    <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{ $pa->pasien->nama }}</td>
                     <td>{{$pa->nama_ibu}}</td>
                     <td>{{$pa->nama_ayah}}</td>
                     <td>{{$pa->keluhan}}</td>
                     <td>{{$pa->dokter->nama}}</td>
                     <td>{{$pa->pasien->alamat }}</td>
                     <td>
                      <a href="polianak/{{$pa->id}}/edit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                      <form action="/polianak/{{$pa->id}}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ?')"><i class="fa fa-trash"></i>  Hapus</button>
                      </form>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{$poli_anaks ->links('pagination::bootstrap-5')}}
@endsection