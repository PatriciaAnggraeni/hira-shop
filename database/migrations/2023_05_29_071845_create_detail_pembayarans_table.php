<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('detail_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_detail_pembayaran')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('detail_pembayaran');
    }
};
