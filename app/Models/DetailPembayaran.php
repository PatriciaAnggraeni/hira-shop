<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model {

    use HasFactory;

    protected $guarded = ['payment_details_code'];

    public function payment() {
        return $this->belongsTo(Pembayaran::class);
    }

    public function payment_method() {
        return $this->hasOne(MetodePembayaran::class);
    }

    public function payment_status() {
        return $this->hasMany(StatusPembayaran::class);
    }
}
