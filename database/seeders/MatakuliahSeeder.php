<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'nama_matkul' => 'Metode Pemrograman Modern',
                'sks' => '2',
                'ruang' => 'B206',
            ],
            [
                'nama_matkul' => 'Keamanan Jaringan',
                'sks' => '2',
                'ruang' => 'B206',
            ],
            [
                'nama_matkul' => 'Perencanaan Teknologi Informasi',
                'sks' => '2',
                'ruang' => 'B306',
            ],
        ];
        DB::table('matakuliah')->insert($data);
    }
}

