<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pesanan')->after('id');
            $table->foreign('id_pesanan')->references('id')->on('pesanan')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
