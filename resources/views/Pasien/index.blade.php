@extends('layouts.main')

@section('container')

@if (session()->has('pesan_tambah'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
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

<div class="col-lg-12">
  <div class="row">
    <div class="">
      <h3 class="text-center">List Data Pasien Puskesmas Padang Pasir</h3>
      <a href="/login" class="btn btn-dark my-4 mx-2" ><i class="fas fa-reply"></i> Kembali</a>
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
                  <thead style="background: grey;" class="text-center" >
                    <tr >
                      <th style="width: 10px">No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Tanggal Lahir</th>
                      <th>Pekerjaan</th>
                      <th>JK</th>
                      <th>No Hp</th>
                      <th>Poli</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pasiens as $pasien)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$pasien->nik}}</td>
                      <td>{{$pasien->nama}}</td>
                      <td>{{$pasien->umur}}</td>
                      <td>{{date('d-m-Y',strtotime($pasien->tgl_lahir))}}</td>
                      <td>{{$pasien->pekerjaan}}</td>
                      <td>{{$pasien->jenis_kelamin}}</td>
                      <td>{{$pasien->no_hp}}</td>
                      <td>{{$pasien->kategori->nama}}</td>
                      <td>{{$pasien->alamat}}</td>
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
  {{$pasiens ->links('pagination::bootstrap-5')}}
  @endsection