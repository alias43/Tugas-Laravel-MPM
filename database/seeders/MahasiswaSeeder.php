<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder {
    public function run() {
        $data = [
            [
                'nama' => 'Aldyn Aditya',
                'nim' => '21060120110045',
                'asal' => 'Semarang',
            ],
            [
                'nama' => 'Ali Ridho',
                'nim' => '21060120130112',
                'asal' => 'Bandung',
            ],
            [
                'nama' => 'Fajrul Kamal',
                'nim' => '21060120130082',
                'asal' => 'Bontang',
            ],
            [
                'nama' => 'Lukman Sanusi',
                'nim' => '21060120130140',
                'asal' => 'Paiton',
            ],
            [
                'nama' => 'Steven Ardi',
                'nim' => '21060120130069',
                'asal' => 'Bali',
            ],
        ];

        DB::table('mahasiswa')->insert($data);
    }
}

