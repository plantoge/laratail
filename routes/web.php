<?php

use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Login;
use App\Livewire\Produk\Produkcreate;
use App\Livewire\Produk\Produkedit;
use App\Livewire\Produk\Produkindex;
use App\Livewire\Register;
use App\Livewire\Transaksi\TransaksiCreate;
use App\Livewire\Transaksi\TransaksiDetail;
use App\Livewire\Transaksi\TransaksiIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Get('login', Login::class)->name('login');
Route::Get('register', Register::class)->name('register');

Route::group([
    'middleware' => ['auth']
], function() {
    Route::Get('dashboard', DashboardIndex::class)->name('dashboard');
    Route::Get('produk', Produkindex::class)->name('produk');
    Route::Get('produk/create', Produkcreate::class)->name('produk-create');
    Route::Get('produk/{id}/edit', Produkedit::class)->name('produk-edit');
    Route::Get('transaksi', TransaksiIndex::class)->name('transaksi');
    Route::Get('transaksi/create', TransaksiCreate::class)->name('transaksi-create');
    Route::Get('transaksi/{id}/detail', TransaksiDetail::class)->name('transaksi-detail');
    
    Route::get('logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});
        