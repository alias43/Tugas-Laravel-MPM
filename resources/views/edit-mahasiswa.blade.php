<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="content">
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" placeholder="Nama">
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" placeholder="NIM">
        <input type="text" name="asal" value="{{ $mahasiswa->asal }}" placeholder="Asal">
        <button type="submit">Update Mahasiswa</button>
    </form>
    </div>
</body>
</html>
