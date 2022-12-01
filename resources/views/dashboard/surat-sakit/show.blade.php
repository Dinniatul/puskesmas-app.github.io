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
					<center><h1><b>Surat Keterangan Sakit</b></h1></center>
					<p>Dengan ini menerangkan  bahwa berdasarkan hasil pemeriksaan yang telah dilakukan kepada pasien:</p>
					<table >
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>{{ $sakits->pasien->nama}}</td>
						</tr>
						<tr>
							<td>Umur </td>
							<td>:</td>
							<td>{{ $sakits->pasien->umur}}</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td>{{ $sakits->pasien->pekerjaan}}</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td>{{ $sakits->pasien->alamat}}</td>

						</table>
					</div>
					<div class="card-body" style="width: 60rem;">
						<p>Perlu berisitirahat karena sakit selama 
							<?php
							$tgl_mulai = new DateTime($sakits->tgl_mulai); 
							$tgl_akhir = new DateTime($sakits->tgl_berakhir); 
							$d = $tgl_akhir->diff($tgl_mulai)->days; 
							echo $d. " hari"; 
							?> terhitung tanggal {{ date('d-m-Y',strtotime($sakits->tgl_mulai))}} s/d {{ date('d-m-Y',strtotime($sakits->tgl_berakhir)) }}.</p>
							<p >Demikianlah surat ini kami buat dengan sebenarnya agar dapat di pergunakan seperlunya.</p>
						</div>
						<div class="card-body" style="width: 60rem;">
							<p style="text-indent: 4.4in">Padang {{ date('d-m-Y ') }}</p>
							<p style="text-indent: 4.4in">Dokter Mengetahui</p>
						</div>
						<div class="card-body my-6" >
							<p style="text-indent: 4.5in">{{$sakits->dokter->nama}}</p>
						</div>

					</div>
					
				</div>
				<div class="container text-center my-2">
					<a href="../sakit" class="btn btn-success col-md-4 ">Kembali</a>
				</div>
			</div>
		</div>

		@endsection