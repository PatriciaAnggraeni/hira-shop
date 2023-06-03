<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengiriman extends Model {

    use HasFactory;

    protected $guarded = ['kode_pengiriman'];

    public function pengiriman() {
        return $this->hasOne(Pengiriman::class);
    }

    public function metode_pengiriman() {
        return $this->hasOne(MetodePengiriman::class);
    }

    public function status_pengiriman() {
        return $this->hasMany(StatusPengiriman::class);
    }
}
