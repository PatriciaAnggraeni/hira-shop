<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller {

    public function index() {
        return view('admin.buyer.buyer');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show(Pelanggan $pelanggan) {

    }

    public function edit(Pelanggan $pelanggan) {

    }

    public function update(Request $request, Pelanggan $pelanggan) {

    }

    public function destroy(Pelanggan $pelanggan) {

    }
}
