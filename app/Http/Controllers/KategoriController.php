<?php

namespace App\Http\Controllers;

use App\Models\Kostum;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('category', [
            'kategori' => Kategori::all(),
            'title' => 'Categories',
        ]);
    }
}
