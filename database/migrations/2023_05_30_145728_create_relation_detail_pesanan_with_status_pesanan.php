<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('detail_pesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_status_pesanan')->after('id_barang');
            $table->foreign('id_status_pesanan')->references('id')->on('status_pesanan')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
