<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model {

    use HasFactory;

    protected $guarded = ['buyer_code'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function buyer() {
        return $this->hasMany(Pesanan::class);
    }
}
