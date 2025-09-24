<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Data Hobi </h1>
     @foreach($hobi as $datahobi)
    <ul><li>{{$datahobi}}</li></ul>
    @endforeach
</body>
</html>