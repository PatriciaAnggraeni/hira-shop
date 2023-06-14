<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePengiriman extends Model {

    use HasFactory;

    protected $guarded = ['delivery_method_code', 'method'];

    public function delivery_details() {
        return $this->belongsTo(DetailPengiriman::class);
    }
}
