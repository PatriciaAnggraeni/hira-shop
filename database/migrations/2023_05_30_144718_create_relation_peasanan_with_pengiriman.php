<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('pesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pengiriman')->after('id_pelanggan');
            $table->foreign('id_pengiriman')->references('id')->on('pengiriman')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
