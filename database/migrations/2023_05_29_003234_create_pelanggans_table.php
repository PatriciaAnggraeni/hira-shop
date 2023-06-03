<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelanggan')->unique();
            $table->string('gambar')->nullable();
            $table->string('nama')->nullable();
            $table->enum('jenis_kelamin', ['P', 'L'])->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_telph', 13)->nullable();
            $table->longText('alamat')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pelanggan');
    }
};
