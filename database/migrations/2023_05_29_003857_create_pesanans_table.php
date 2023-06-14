<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->date('order_date')->unique();
            $table->unsignedBigInteger('total_price')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('order');
    }
};
