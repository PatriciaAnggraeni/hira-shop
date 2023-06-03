<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model {

    use HasFactory;

    protected $guarded = ['kode_detail_pesanan'];

    public function pesanan() {
        return $this->belongsTo(Pesanan::class);
    }

    public function barang() {
        return $this->belongsTo(Barang::class);
    }

    public function status_pesanan() {
        return $this->hasMany(StatusPesanan::class);
    }
}
