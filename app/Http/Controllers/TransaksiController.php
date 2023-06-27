<?php

namespace App\Http\Controllers;

use App\Models\Kostum;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_kostum' => 'required',
            'total_harga' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_pengembalian' => 'required',
            'catatan' => 'required',
        ]);

        $rentKostum = new Transaksi();
        $rentKostum->id_user = $request->id_user;
        $rentKostum->id_kostum = $request->id_kostum;
        $rentKostum->total_harga = $request->total_harga;
        $rentKostum->save();

        $rentDetail = new DetailTransaksi();
        $rentDetail->tanggal_sewa = $request->tanggal_sewa;
        $rentDetail->tanggal_pengembalian = $request->tanggal_pengembalian;
        $rentDetail->catatan = $request->catatan;

        // Menyimpan ID transaksi yang sudah ada pada DetailTransaksi
        $rentDetail->id_transaksi = $rentKostum->id;
        $rentDetail->save();

        // Mengurangi stok kostum berdasarkan ID kostum
        $kostum = Kostum::findOrFail($request->id_kostum);
        $kostum->stok -= 1;
        $kostum->save();

        $kostumSlug = $kostum->slug;

        return redirect()->route('successful-rent', ['kostum' => $kostumSlug]);
    }
}
