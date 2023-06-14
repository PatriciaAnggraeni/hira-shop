<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model {

    use HasFactory;

    protected $guarded = ['order_details_code'];

    public function order() {
        return $this->belongsTo(Pesanan::class);
    }

    public function product() {
        return $this->belongsTo(Barang::class);
    }

    public function order_status() {
        return $this->hasMany(StatusPesanan::class);
    }
}
