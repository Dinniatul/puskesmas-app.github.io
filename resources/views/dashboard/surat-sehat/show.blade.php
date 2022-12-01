@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
	<div class="col-lg-7">
		<div class="card-body" style="width: 40rem;">
			<div class=" card border-dark ">
				<div class="card-header text-center">
					<h1>DINAS KESEHATAN KOTA PADANG</h1><img src="/img/2.png" width="80px" class="d-inline mx-4">
					<font size="6px">Puskesmas Padang Pasir</font><img src="/img/1.png" width="80px" class="d-inline mx-4">
					<font> Padang Pasir IV, Padang Pasir, Kec. Padang Bar., Kota Padang, Sumatera Barat</font>
				</div>
				<div class="card-body " style="width: 40rem;">
					<center><h1><b>Surat Keterangan Sehat</b></h1></center>
					<p>Dengan ini menerangkan  bahwa berdasarkan hasil pemeriksaan yang telah dilakukan kepada pasien:</p>
					<table >
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>{{ $sehats->pasien->nama}}</td>
						</tr>
						<tr>
							<td>Umur </td>
							<td>:</td>
							<td>{{ $sehats->pasien->umur}}</td>
						</tr>
						<tr>
							<td>Jenis Kelamin </td>
							<td>:</td>
							<td>{{ $sehats->pasien->jenis_kelamin}}</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td>{{ $sehats->pasien->pekerjaan}}</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td>{{ $sehats->pasien->alamat}}</td>

						</table>
					</div>
					<div class="card-body" style="width: 60rem;">
						<p>Hasil pemeriksaan fisik kami pada tanggal {{ date('d-m-Y ') }} di Puskesmas Padang Pasir adalah sebagai Berikut:
							<table >
								<tr>
									<td>Berat Badan</td>
									<td>:</td>
									<td>{{ $sehats->berat_badan}}</td>
								</tr>
								<tr>
									<td>Tinggi Badan </td>
									<td>:</td>
									<td>{{ $sehats->tinggi_badan}}</td>
								</tr>
								<tr>
									<td>Golongan Darah</td>
									<td>:</td>
									<td>{{ $sehats->golongan_darah}}</td>
								</tr>
								<tr>
									<td>Riwayat Penyakit</td>
									<td>:</td>
									<td>{{ $sehats->riwayat_penyakit}}</td>
								</table>
							</div>
							<div class="card-body" style="width: 50rem;">
								<p>Surat Keterangan Sehat ini dipergunakan sebagai {{$sehats->keperluan}}</p>
							</div>
							<div class="card-body" style="width: 60rem;">
								<p style="text-indent: 4.4in">Padang {{ date('d-m-Y ') }}</p>
								<p style="text-indent: 4.4in">Dokter Mengetahui</p>
							</div>
							<div class="card-body my-6" >
								<p style="text-indent: 4.5in">{{$sehats->dokter->nama}}</p>
							</div>
						</div>
						<div class="container text-center my-2">
							<a href="../sehat" class="btn btn-success col-md-4 ">Kembali</a>
						</div>
					</div>
				</div>

				@endsection