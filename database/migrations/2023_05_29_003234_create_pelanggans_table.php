<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('buyer', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_code')->unique();
            $table->text('image')->nullable();
            $table->string('name')->nullable();
            $table->enum('gender', ['P', 'L'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('no_telph', 13)->nullable();
            $table->text('address')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('buyer');
    }
};
