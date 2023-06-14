<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPembayaranSeeder extends Seeder {

    public function run() {

        $payment_status = [
            [ 'status' => 'belum melakukan pembayaran' ],
            [ 'status' => 'sedang menunggu pembayaran' ],
            [ 'status' => 'berhasil melakukan pembayaran' ],
            [ 'status' => 'gagal melakukan pembayaran' ],
            [ 'status' => 'selesai' ],
        ];

        DB::table('payment_status')->insert($payment_status);
    }
}
