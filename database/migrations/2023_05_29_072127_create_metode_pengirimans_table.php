<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('metode_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_metode_pengiriman')->unique();
            $table->string('metode')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('metode_pengiriman');
    }
};
