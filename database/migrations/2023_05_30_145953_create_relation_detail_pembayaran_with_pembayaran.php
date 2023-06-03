<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('detail_pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembayaran')->after('id');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
