<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    Nama Siswa

    <ol>
    @foreach($nama as $sw)
        <li>{{$sw}}</li>
    @endforeach
    </ol>

    <script src="js/bootstrap.js"></script>
</body>
</html>
