<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model {

    use HasFactory;

    protected $guarded = ['delivery_code', 'no_resi'];

    public function order() {
        return $this->belongsTo(Pesanan::class);
    }
}
