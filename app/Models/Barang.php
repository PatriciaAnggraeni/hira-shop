<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {

    use HasFactory;

    protected $guarded = ['kode_barang'];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function detail_pesanan() {
        return $this->hasMany(DetailPesanan::class);
    }
}
