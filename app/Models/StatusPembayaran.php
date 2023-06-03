<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPembayaran extends Model {

    use HasFactory;

    protected $guarded = ['kode_status_pembayaran', 'status'];

    public function detail_pembayaran() {
        return $this->belongsTo(DetailPembayaran::class);
    }
}
