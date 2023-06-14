<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('order', function (Blueprint $table) {
            $table->unsignedBigInteger('delivery_id')->after('buyer_id');
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
