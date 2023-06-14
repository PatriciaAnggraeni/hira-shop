<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengiriman extends Model {

    use HasFactory;

    protected $guarded = ['delivery_status_code', 'status'];

    public function delivery_status() {
        return $this->belongsTo(DetailPesanan::class);
    }
}
