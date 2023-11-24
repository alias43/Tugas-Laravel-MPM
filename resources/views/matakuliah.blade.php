<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Data Matakuliah</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Ruang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliah as $matkul)
            <tr>
                <td>{{ $matkul->nama_matkul }}</td>
                <td>{{ $matkul->sks }}</td>
                <td>{{ $matkul->ruang }}</td>
                <td>
                    <a href="{{ route('matakuliah.edit', $matkul->id) }}">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $matkul->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form untuk menambahkan data -->
    <h2>Tambah Matakuliah Baru</h2>
    <form method="POST" action="{{ route('matakuliah.store') }}">
        @csrf
        <input type="text" name="nama_matkul" placeholder="Nama Matakuliah">
        <input type="text" name="sks" placeholder="SKS">
        <input type="text" name="ruang" placeholder="Ruang">
        <button type="submit">Tambah Matakuliah</button>
    </form>
</body>
</html>
