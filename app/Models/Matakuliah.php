<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model {
    protected $table = 'matakuliah'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'nama_matkul', 'sks', 'ruang'
    ];

    // Tambahan metode atau hubungan jika diperlukan
}
