<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('detail_pengiriman', function (Blueprint $table) {
            $table->unsignedBigInteger('id_status_pengiriman')->after('id_metode_pengiriman');
            $table->foreign('id_status_pengiriman')->references('id')->on('status_pengiriman')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
