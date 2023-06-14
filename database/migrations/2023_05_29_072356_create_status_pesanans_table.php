<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('order_status', function (Blueprint $table) {
            $table->id();
            $table->string('order_status_code')->unique();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('order_statuss');
    }
};
