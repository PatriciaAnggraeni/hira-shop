<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPesanan extends Model {

    use HasFactory;

    protected $guarded = ['kode_status_pesanan', 'status'];

    public function detail_pesanan() {
        return $this->belongsTo(DetailPesanan::class);
    }
}
