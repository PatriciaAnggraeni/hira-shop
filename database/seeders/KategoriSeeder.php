<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder {

    public function run() {

        $kategori = [
            [
                'kode_kategori' => 'RKS1001',
                'kategori' => 'rekomendasi'
            ], [
                'kode_kategori' => 'ELT1002',
                'kategori' => 'elektronik'
            ], [
                'kode_kategori' => 'MAM1004',
                'kategori' => 'makanan & minuman'
            ], [
                'kode_kategori' => 'PAK1005',
                'kategori' => 'perawatan & kecantikan'
            ], [
                'kode_kategori' => 'PKN1006',
                'kategori' => 'pakaian'
            ], [
                'kode_kategori' => 'HNP1007',
                'kategori' => 'handphone $ tablet'
            ], [
                'kode_kategori' => 'SPT1008',
                'kategori' => 'sepatu'
            ], [
                'kode_kategori' => 'JTN1009',
                'kategori' => 'jam tangan'
            ],
        ];

        DB::table('kategori')->insert($kategori);

    }
}
