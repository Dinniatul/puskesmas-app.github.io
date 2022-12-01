<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Pasien</title>
    <style type="text/css">
        .table1{
            font-family: sans-serif;
            color: black;
            border-collapse: collapse;
        }
        .table1, th, td{
            border: 1px solid;
            padding: 8px 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <center>Laporan Pasien</center>
    <table class="table1" >
        <tr style="background-color:grey;" class="text-white">
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
        @foreach($pasiens as $pasien)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pasien->nik}}</td>
            <td>{{$pasien->nama}}</td>
            <td>{{$pasien->umur}}</td>
            <td>{{$pasien->tgl_lahir}}</td>
            <td>{{$pasien->pekerjaan}}</td>
            <td>{{$pasien->jenis_kelamin}}</td>
            <td>{{$pasien->no_hp}}</td>
            <td>{{$pasien->kategori->nama}}</td>
            <td>{{$pasien->alamat}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>