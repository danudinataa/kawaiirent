<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SuccessfulRentController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication
Route::get('/', function () {
    return view('home');
})
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(['web', 'auth', 'admin'])->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/dashboard/tables', [DashboardController::class, 'showTables'])->name('dashboard/tables');

    Route::get('/dashboard/edit', [DashboardController::class, 'showEdit'])->name('dashboard/edit');
    Route::post('/dashboard/edit-kategori', [DashboardController::class, 'storeKategori'])->name('store-kategori');

    Route::post('/dashboard/edit-kostum', [DashboardController::class, 'storeKostum'])->name('store-kostum');
});

require __DIR__ . '/auth.php';

//
Route::get('/', [HomeController::class, 'index']);

Route::get('/rent', [KostumController::class, 'index'])->name('rent');

Route::get('/rent/{kostum:slug}', [KostumController::class, 'show'])->name('detail-rent');

Route::post('/rent/{kostum:slug}', [TransaksiController::class, 'store'])->name('rent-confirm');

Route::get('rent/{kostum:slug}/successful-rent', [SuccessfulRentController::class, 'index'])->name('successful-rent');

Route::get('/categories', [KategoriController::class, 'index']);

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/category/{kategori:slug}', [KostumController::class, 'getByCategorySlug']);
