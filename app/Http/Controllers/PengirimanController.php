<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller {

    public function index() {
        return view('admin.delivery.delivery');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show(Pengiriman $pengiriman) {

    }

    public function edit(Pengiriman $pengiriman) {

    }

    public function update(Request $request, Pengiriman $pengiriman) {

    }

    public function destroy(Pengiriman $pengiriman) {

    }
}
