<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPesananSeeder extends Seeder {

    public function run() {

        $order_status = [
            [ 'status' => 'penjual sedang mengatur jadwal pengiriman', ],
            [ 'status' => 'penjual berhasil mengatur jadwal pengiriman', ],
            [ 'status' => 'pesanan dalam proses pengemasan', ],
            [ 'status' => 'pesanan dalam proses pengiriman' ],
            [ 'status' => 'pesanan telah diterima oleh pembeli' ],
            [ 'status' => 'pesanan telah diterima oleh yang bersangkutan' ],
            [ 'status' => 'selesai' ]
        ];

        DB::table('order_status')->insert( $order_status );
    }
}
