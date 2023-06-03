<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengiriman extends Model {

    use HasFactory;

    protected $guarded = ['kode_status_pengiriman', 'status'];

    public function detail_pengiriman() {
        return $this->belongsTo(DetailPesanan::class);
    }
}
