<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder {

    public function run() {

        $metode_pembayaran = [
            [
                'kode_metode_pembayaran' => 'COD021832',
                'metode' => 'cod'
            ],
            [
                'kode_metode_pembayaran' => 'TFB117218',
                'metode' => 'transfer bank'
            ],
            [
                'kode_metode_pembayaran' => 'KKD889430',
                'metode' => 'kartu kredit/debit'
            ],
        ];

        DB::table('metode_pembayaran')->insert($metode_pembayaran);

    }
}
