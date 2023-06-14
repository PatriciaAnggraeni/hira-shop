<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder {

    public function run() {

        $category = [
            [
                'category_code' => 'RKS1001',
                'category' => 'rekomendasi'
            ], [
                'category_code' => 'ELT1002',
                'category' => 'elektronik'
            ], [
                'category_code' => 'MAM1004',
                'category' => 'makanan & minuman'
            ], [
                'category_code' => 'PAK1005',
                'category' => 'perawatan & kecantikan'
            ], [
                'category_code' => 'PKN1006',
                'category' => 'pakaian'
            ], [
                'category_code' => 'HNP1007',
                'category' => 'handphone & tablet'
            ], [
                'category_code' => 'SPT1008',
                'category' => 'sepatu'
            ], [
                'category_code' => 'JTN1009',
                'category' => 'jam tangan'
            ],
        ];

        DB::table('category')->insert($category);

    }
}
