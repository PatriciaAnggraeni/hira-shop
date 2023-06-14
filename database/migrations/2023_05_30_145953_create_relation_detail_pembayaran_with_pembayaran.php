<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::table('payment_details', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id')->after('id');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
