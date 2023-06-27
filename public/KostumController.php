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
}
