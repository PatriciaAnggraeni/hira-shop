<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {

        // seed kategori
        $this->call(KategoriSeeder::class);

        // seed table status
        $this->call(StatusPesananSeeder::class);
        $this->call(StatusPengirimanSeeder::class);
        $this->call(StatusPembayaranSeeder::class);

        // seed table metode
        $this->call(MetodePengirimanSeeder::class);
        $this->call(MetodePembayaranSeeder::class);
    }
}
