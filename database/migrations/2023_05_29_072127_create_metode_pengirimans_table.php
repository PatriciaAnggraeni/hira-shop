<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('delivery_method', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_method_code')->unique();
            $table->string('method')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('delivery_method');
    }
};
