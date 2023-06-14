<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('order', function (Blueprint $table) {
            $table->unsignedBigInteger('buyer_id')->after('id');
            $table->foreign('buyer_id')->references('id')->on('buyer')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
