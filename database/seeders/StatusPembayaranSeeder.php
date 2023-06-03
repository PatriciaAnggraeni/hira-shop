<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPembayaranSeeder extends Seeder {

    public function run() {

        $status_pembayaran = [
            [ 'status' => 'belum melakukan pembayaran' ],
            [ 'status' => 'sedang menunggu pembayaran' ],
            [ 'status' => 'berhasil melakukan pembayaran' ],
            [ 'status' => 'gagal melakukan pembayaran' ],
            [ 'status' => 'selesai' ],
        ];

        DB::table('status_pembayaran')->insert($status_pembayaran);
    }
}
