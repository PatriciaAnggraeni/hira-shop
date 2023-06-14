<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller {

    public function index() {
        return view('admin.product.product');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show(Barang $barang) {

    }

    public function edit(Barang $barang) {

    }

    public function update(Request $request, Barang $barang) {

    }

    public function destroy(Barang $barang) {

    }
}
