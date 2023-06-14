<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('delivery_details', function (Blueprint $table) {
            $table->unsignedBigInteger('delivery_method_id')->after('delivery_id');
            $table->foreign('delivery_method_id')->references('id')->on('delivery_method')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
