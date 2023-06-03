<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model {

    use HasFactory;

    protected $guarded = [];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function pelanggan() {
        return $this->hasMany(Pesanan::class);
    }
}
