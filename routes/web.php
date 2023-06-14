<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('admin.dashboard');
});

Route::resource('/buyer', PelangganController::class)->parameter('buyer', 'id');
Route::resource('/product', BarangController::class)->parameter('product', 'id');
Route::resource('/category', KategoriController::class)->parameter('category', 'id');
Route::resource('/order', PesananController::class)->parameter('order', 'id');
Route::resource('/delivery', PengirimanController::class)->parameter('delivery', 'id');
Route::resource('/payment', PembayaranController::class)->parameter('payment', 'id');
