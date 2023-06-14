<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('payment_details', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_status_id')->after('payment_method_id');
            $table->foreign('payment_status_id')->references('id')->on('payment_status')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
