<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller {

    public function index() {
        return view('admin.category.category');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show(Kategori $kategori) {

    }


    public function edit(Kategori $kategori) {

    }

    public function update(Request $request, Kategori $kategori) {

    }

    public function destroy(Kategori $kategori) {
        
    }
}
