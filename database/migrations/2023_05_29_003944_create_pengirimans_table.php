<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_code')->unique();
            $table->string('no_resi')->unique();
            $table->string('delivery_date')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('delivery');
    }
};
