<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Asal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->asal }}</td>
                <td class="action-buttons">
                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
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
    <h2>Tambah Mahasiswa Baru</h2>
    <form method="POST" action="{{ route('mahasiswa.store') }}">
        @csrf
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="nim" placeholder="NIM">
        <input type="text" name="asal" placeholder="Asal">
        <button type="submit">Tambah Mahasiswa</button>
    </form>
</body>
</html>
