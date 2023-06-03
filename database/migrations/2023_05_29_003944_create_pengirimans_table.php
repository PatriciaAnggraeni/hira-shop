<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengiriman')->unique();
            $table->string('no_resi')->unique();
            $table->string('tgl_pengiriman')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pengiriman');
    }
};
