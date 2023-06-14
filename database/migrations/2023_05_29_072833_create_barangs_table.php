<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->unique();
            $table->text('image')->nullable();
            $table->string('name')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('stock')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('product');
    }
};
