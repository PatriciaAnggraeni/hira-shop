<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('delivery_details', function (Blueprint $table) {
            $table->unsignedBigInteger('delivery_status_id')->after('delivery_method_id');
            $table->foreign('delivery_status_id')->references('id')->on('delivery_status')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
