<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Biodata</h1>
    <table border=1>
        <tr>
            <th>id</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>

        </tr>
        @foreach($biodata as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_lengkap}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->tempat_lahir}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->telepon}}</td>
            <td>{{$data->email}}</td>
        </tr>
        @endforeach
</table>
</body>
</html>