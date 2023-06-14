<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengiriman extends Model {

    use HasFactory;

    protected $guarded = ['delivery_code'];

    public function delivery() {
        return $this->hasOne(Pengiriman::class);
    }

    public function delivery_method() {
        return $this->hasOne(MetodePengiriman::class);
    }

    public function delivery_status() {
        return $this->hasMany(StatusPengiriman::class);
    }
}
