<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePengirimanSeeder extends Seeder {

    public function run() {

        $metode_pengiriman = [
            [
                'kode_metode_pengiriman' => 'DLV199119',
                'metode' => 'Deliverse'
            ],
            [
                'kode_metode_pengiriman' => 'JNT101010',
                'metode' => 'J&T Express'
            ],
            [
                'kode_metode_pengiriman' => 'NJA901231',
                'metode' => 'Ninja Express'
            ],
            [
                'kode_metode_pengiriman' => 'SCH895540',
                'metode' => 'SiCepat Halu'
            ],
            [
                'kode_metode_pengiriman' => 'JNE009322',
                'metode' => 'J&E Express'
            ],
            [
                'kode_metode_pengiriman' => 'RGE743832',
                'metode' => 'Regular Express'
            ],
            [
                'kode_metode_pengiriman' => 'GRE904383',
                'metode' => 'Grab Express'
            ],
        ];

        DB::table('metode_pengiriman')->insert($metode_pengiriman);

    }
}
