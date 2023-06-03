<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('detail_pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_status_pembayaran')->after('id_metode_pembayaran');
            $table->foreign('id_status_pembayaran')->references('id')->on('status_pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
