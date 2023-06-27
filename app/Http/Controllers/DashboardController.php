<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kostum;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::where('role', '!=', 'admin')->count();
        $productCount = Kostum::count();
        $rentCount = Transaksi::count();
        $transaksi = Transaksi::all();
        $detailTransaksi = DetailTransaksi::all();

        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'userCount' => $userCount,
            'productCount' => $productCount,
            'rentCount' => $rentCount,
            'transaksi' => $transaksi,
            'detailTransaksi' => $detailTransaksi,
        ]);
    }

    public function showTables()
    {
        $userTable = User::all();
        $kategoriTable = Kategori::all();
        $kostumTable = Kostum::all();
        $transaksiTable = Transaksi::all();
        $detailTransaksiTable = DetailTransaksi::all();

        return view('dashboard.tables', [
            'title' => 'Tables',
            'user' => $userTable,
            'kategori' => $kategoriTable,
            'kostum' => $kostumTable,
            'transaksi' => $transaksiTable,
            'detailTransaksi' => $detailTransaksiTable,
        ]);
    }

    public function showEdit()
    {
        return view('dashboard.edit', [
            'title' => 'Edit',
        ]);
    }

    public function storeKategori(Request $request) 
    {
        $request->validate([
            'namaKategori' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
        ]);

        $addKategori = new Kategori();
        $addKategori->nama_kategori = $request->namaKategori;
        $addKategori->slug = $request->slug;
        $addKategori->deskripsi = $request->deskripsi;
        $addKategori->save();

        return redirect()->back()->with('successKategori', 'Kategori baru berhasil disimpan.');
    }

    public function storeKostum(Request $request)
    {
        $request->validate([
            'idKategori' => 'required',
            'namaKostum' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
            'hargaSewa' => 'required',
            'stok' => 'required',
        ]);

        $addKostum = new Kostum();
        $addKostum->id_kategori = $request->idKategori;
        $addKostum->nama_kostum = $request->namaKostum;
        $addKostum->slug = $request->slug;
        $addKostum->deskripsi = $request->deskripsi;
        $addKostum->harga_sewa = $request->hargaSewa;
        $addKostum->stok = $request->stok;
        $addKostum->save();

        return redirect()->back()->with('successKostum', 'Kostum baru berhasil disimpan.');

    }
}
