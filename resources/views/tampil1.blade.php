<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Data Siswa </h1>
    @foreach($siswa as $data)
    <ul><li>{{$data}}</li></ul>
    @endforeach
</body>
</html>