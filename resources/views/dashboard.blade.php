<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="content">
        <h1>Dashboard</h1>
        <div class="menu">
            <ul class="horizontal-list">
                <li><p><a href="{{ route('mahasiswa.index') }}">Lihat Data Mahasiswa</a></p></li>
                <li><p><a href="{{ route('matakuliah.index') }}">Lihat Data Matakuliah</a></p></li>
            </ul>
        </div>
    </div>
</body>
</html>
