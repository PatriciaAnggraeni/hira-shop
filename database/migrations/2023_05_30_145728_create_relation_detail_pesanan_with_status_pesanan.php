<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('order_status_id')->after('product_id');
            $table->foreign('order_status_id')->references('id')->on('order_status')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
