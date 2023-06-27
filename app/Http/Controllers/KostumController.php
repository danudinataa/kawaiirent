<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kostum;
use Illuminate\Http\Request;

class KostumController extends Controller
{
    public function index() {
        return view('rent', [
            'title' => 'Rent',
            'kostum' => Kostum::all()
        ]);
    }

    public function show(Kostum $kostum) {
        return view('detail-rent', [
            'title' => 'Rent',
            'kostum' => $kostum
        ]);
    }

    public function getByCategorySlug($categorySlug)
    {
        $kategori = Kategori::where('slug', $categorySlug)->first();

        if (!$kategori) {
            abort(404); // Menampilkan halaman 404 jika slug kategori tidak ditemukan
        }

        $kostum = Kostum::where('id_kategori', $kategori->id)->get();

        return view('rent-category', [
            'title' => 'Categories',
            'kostum' => $kostum,
            'kategori' => $kategori,
        ]);
    }
}
