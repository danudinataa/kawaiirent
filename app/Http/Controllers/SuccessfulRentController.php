<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessfulRentController extends Controller
{
    public function index()
    {
        return view('successful-rent', [
            'title' => 'Successful Rent',
        ]);
    }
}
