<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

    use HasFactory;

    protected $guarded = ['kode_pembayaran'];

    public function pesanan() {
        return $this->belongsTo(Pesanan::class);
    }

    public function detail_pembayaran() {
        return $this->hasOne(DetailPembayaran::class);
    }
}
