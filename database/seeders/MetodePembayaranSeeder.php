<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder {

    public function run() {

        $payment_method = [
            [
                'payment_method_code' => 'COD021832',
                'method' => 'cod'
            ], [
                'payment_method_code' => 'TFB117218',
                'method' => 'transfer bank'
            ], [
                'payment_method_code' => 'KKD889430',
                'method' => 'kartu kredit/debit'
            ],
        ];

        DB::table('payment_method')->insert($payment_method);

    }
}
