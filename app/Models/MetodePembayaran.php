<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model {

    use HasFactory;

    protected $guarded = ['payment_method_code', 'method'];

    public function payment_details() {
        return $this->belongsTo(DetailPembayaran::class);
    }
}
