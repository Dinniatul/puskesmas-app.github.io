@extends('dashboard.layouts.main')
@section('title','Data Surat Keterangan Sakit')
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
      <h3>Data Surat Keterangan Sakit</h3>
      <a href="/sakit/create" class="btn btn-dark" ><i class="fa fa-plus"></i> Tambah Data</a>
    </div><!-- /.col -->
    <div class="col-sm-6 my-4">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active" style="text-center">SK-Sakit</li>
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
                      <th>NIK</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Berakhir</th>
                      <th>Dokter Pemeriksa</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sakits as $sakit)
                    <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$sakit->pasien->nik}}</td>
                     <td>{{date('d-m-Y',strtotime($sakit->tgl_mulai))}}</td>
                     <td>{{date('d-m-Y',strtotime($sakit->tgl_berakhir))}}</td>
                     <td>{{$sakit->dokter->nama}}</td>
                     <td>
                      <div class="btn-group">
                        <a href="sakit/{{$sakit->id}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</a>
                        <a href="sakit/{{$sakit->id}}/edit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                        <form action="/sakit/{{$sakit->id}}" method="post" class="d-inline">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ?')"><i class="fa fa-trash"></i>  Hapus</button>
                        </form>
                      </div>
                      
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
{{$sakits ->links('pagination::bootstrap-5')}}
@endsection