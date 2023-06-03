<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {

    use HasFactory;

    protected $guarded = ['kode_pesanan'];

    public function pelanggan() {
        $this->belongsTo(Pelanggan::class);
    }

    public function pengiriman() {
        return $this->hasOne(Pengiriman::class);
    }

    public function pembayaran() {
        return $this->hasOne(Pembayaran::class);
    }

    public function detail_pesanan() {
        return $this->hasOne(DetailPesanan::class);
    }
}
