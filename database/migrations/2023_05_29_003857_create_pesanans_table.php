<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->unique();
            $table->date('tgl_pesan')->unique();
            $table->unsignedBigInteger('total_harga')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pesanan');
    }
};
