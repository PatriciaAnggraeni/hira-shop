<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPesananSeeder extends Seeder {

    public function run() {

        $status_pesanan = [
            [ 'status' => 'penjual sedang mengatur jadwal pengiriman', ],
            [ 'status' => 'penjual berhasil mengatur jadwal pengiriman', ],
            [ 'status' => 'pesanan dalam proses pengemasan', ],
            [ 'status' => 'pesanan dalam proses pengiriman' ],
            [ 'status' => 'pesanan telah diterima oleh pembeli' ],
            [ 'status' => 'pesanan telah diterima oleh yang bersangkutan' ],
            [ 'status' => 'selesai' ]
        ];

        DB::table('status_pesanan')->insert( $status_pesanan );
    }
}
