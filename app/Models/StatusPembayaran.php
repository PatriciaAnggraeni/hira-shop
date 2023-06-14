<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPembayaran extends Model {

    use HasFactory;

    protected $guarded = ['payment_status_code', 'status'];

    public function payment_details() {
        return $this->belongsTo(DetailPembayaran::class);
    }
}
