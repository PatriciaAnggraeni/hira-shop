<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {

    use HasFactory;

    protected $guarded = ['product_code'];

    public function category() {
        return $this->belongsTo(Kategori::class);
    }

    public function order_details() {
        return $this->hasMany(DetailPesanan::class);
    }
}
