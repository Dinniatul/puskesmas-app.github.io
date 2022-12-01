<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Dokter</title>
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
    <center>Laporan Data Dokter</center>
    <table class="table1" >
        <tr style="background-color:grey;" class="text-white">
            <th style="width: 10px">No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Spesialis</th>
            <th>No Hp</th>
            <th>Alamat</th>
            
        </tr>
        @foreach($dokters as $dokter)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dokter->nidn}}</td>
            <td>{{$dokter->nama}}</td>
            <td>{{$dokter->umur}}</td>
            <td>{{$dokter->jenis_kelamin}}</td>
            <td>{{$dokter->spesialis->nama}}</td>
            <td>{{$dokter->no_hp}}</td>
            <td>{{$dokter->alamat}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>