<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('payment_code')->unique();
            $table->date('payment_date')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('payment');
    }
};
