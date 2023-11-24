<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="{{ asset('css/mahasiswa.css') }}">
</head>
<body>
    <div class="content">
    <h1>Edit Data Matakuliah</h1>

    <form method="POST" action="{{ route('matakuliah.update', $matakuliah->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="nama_matkul" value="{{ $matakuliah->nama_matkul }}" placeholder="Nama Matakuliah">
        <input type="text" name="sks" value="{{ $matakuliah->sks }}" placeholder="SKS">
        <input type="text" name="ruang" value="{{ $matakuliah->ruang }}" placeholder="Ruang">
        <button type="submit">Update Matakuliah</button>
    </form>
</div>
</body>
</html>
