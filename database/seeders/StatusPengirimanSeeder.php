<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPengirimanSeeder extends Seeder {

    public function run() {

        $delivery_status = [
            [ 'status' => 'barang dalam proses pengiriman' ],
            [ 'status' => 'barang akan dikirimkan ke tempat penyortiran' ],
            [ 'status' => 'barang akan dikirimkan ke logistik' ],
            [ 'status' => 'barang akan dikirimkan ke kota tujuan' ],
            [ 'status' => 'barang akan dikirimkan oleh kurir' ],
            [ 'status' => 'barang akan dikirimkan ke alamat tujuan oleh kurir' ],
            [ 'status' => 'barang sedang dikirimkan ke alamat tujuan' ],
            [ 'status' => 'barang telah sampai di tempat penyortiran' ],
            [ 'status' => 'barang telah sampai di logistik' ],
            [ 'status' => 'barang telah sampai di kota tujuan' ],
            [ 'status' => 'barang telah sampai di alamat tujuan' ],
            [ 'status' => 'selesai' ]
        ];

        DB::table('delivery_status')->insert($delivery_status);
    }
}
