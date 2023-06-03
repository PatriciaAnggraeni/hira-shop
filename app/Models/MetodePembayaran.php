<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model {

    use HasFactory;

    protected $guarded = ['kode_metode_pembayaran', 'metode'];

    public function detail_pembayaran() {
        return $this->belongsTo(DetailPembayaran::class);
    }
}
