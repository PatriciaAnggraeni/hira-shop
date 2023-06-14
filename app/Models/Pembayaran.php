<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

    use HasFactory;

    protected $guarded = ['payment_code'];

    public function order() {
        return $this->belongsTo(Pesanan::class);
    }

    public function payment_details() {
        return $this->hasOne(DetailPembayaran::class);
    }
}
