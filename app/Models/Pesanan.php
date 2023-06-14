<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {

    use HasFactory;

    protected $guarded = ['order_code'];

    public function buyer() {
        $this->belongsTo(Pelanggan::class);
    }

    public function delivery() {
        return $this->hasOne(Pengiriman::class);
    }

    public function payment() {
        return $this->hasOne(Pembayaran::class);
    }

    public function order_details() {
        return $this->hasOne(DetailPesanan::class);
    }
}
