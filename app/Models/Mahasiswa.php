<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    protected $table = 'mahasiswa'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'nama', 'nim', 'asal'
    ];

    // Tambahan metode atau hubungan jika diperlukan
}
