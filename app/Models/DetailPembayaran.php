<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model {

    use HasFactory;

    protected $guarded = ['kode_detail_pembayaran'];

    public function pembayaran() {
        return $this->belongsTo(Pembayaran::class);
    }

    public function metode_pembayaran() {
        return $this->hasOne(MetodePembayaran::class);
    }

    public function status_pembayaran() {
        return $this->hasMany(StatusPembayaran::class);
    }
}
