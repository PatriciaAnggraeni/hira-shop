<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

    use HasFactory;

    protected $guarded = ['kode_kategori', 'kategori'];

    public function barang() {
        return $this->hasMany(Barang::class);
    }
}
