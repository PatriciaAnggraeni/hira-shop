<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{

    public function index() {
        return view('admin.payment.payment');
    }

    public function create() {

    }

    public function store(Request $request) {
    }

    public function show(Pembayaran $pembayaran) {
    }


    public function edit(Pembayaran $pembayaran) {

    }

    public function update(Request $request, Pembayaran $pembayaran) {
    }

    public function destroy(Pembayaran $pembayaran) {
    }
}
