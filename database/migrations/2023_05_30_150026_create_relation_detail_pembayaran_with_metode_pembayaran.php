<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('detail_pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_metode_pembayaran')->after('id_pembayaran');
            $table->foreign('id_metode_pembayaran')->references('id')->on('metode_pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
