<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pembayaran')->unique();
            $table->date('tgl_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pembayaran');
    }
};
