<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Dashboard</h1>

    <div>
        <h2>Data Mahasiswa</h2>
        <p><a href="{{ route('mahasiswa.index') }}">Lihat Data Mahasiswa</a></p>
    </div>

    <div>
        <h2>Data Matakuliah</h2>
        <p><a href="{{ route('matakuliah.index') }}">Lihat Data Matakuliah</a></p>
    </div>
</body>
</html>
