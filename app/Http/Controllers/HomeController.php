<?php

namespace App\Http\Controllers;

use App\Models\Kostum;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $best_kostum = collect(); // Membuat koleksi kosong untuk menyimpan hasil
        foreach ($kategori as $best_from_kategori) {
            $kostum = Kostum::where('id_kategori', $best_from_kategori->id)
                ->orderBy('harga_sewa')
                ->take(2)
                ->get();

            $best_kostum = $best_kostum->concat($kostum); // Menggabungkan hasil setiap kategori ke koleksi
        }

        return view('home', [
            'title' => auth()->check() ? 'Home' : 'Welcome',
            'kategori' => $kategori,
            'best_kostum' => $best_kostum,
        ]);
    }
}
