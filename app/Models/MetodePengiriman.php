<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePengiriman extends Model {

    use HasFactory;

    protected $guarded = ['kode_metode_pengiriman', 'metode'];

    public function detail_pengiriman() {
        return $this->belongsTo(DetailPengiriman::class);
    }
}
