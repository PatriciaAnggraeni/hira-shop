<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePengirimanSeeder extends Seeder {

    public function run() {

        $delivery_method = [
            [
                'delivery_method_code' => 'DLV199119',
                'method' => 'Deliverse'
            ], [
                'delivery_method_code' => 'JNT101010',
                'method' => 'J&T Express'
            ], [
                'delivery_method_code' => 'NJA901231',
                'method' => 'Ninja Express'
            ], [
                'delivery_method_code' => 'SCH895540',
                'method' => 'SiCepat Halu'
            ], [
                'delivery_method_code' => 'JNE009322',
                'method' => 'J&E Express'
            ], [
                'delivery_method_code' => 'RGE743832',
                'method' => 'Regular Express'
            ], [
                'delivery_method_code' => 'GRE904383',
                'method' => 'Grab Express'
            ],
        ];

        DB::table('delivery_method')->insert($delivery_method);

    }
}
