<?php

use App\Http\Controllers\TagihanController;
use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Export\Tagihanpdf;
use App\Livewire\Login;
use App\Livewire\Produk\Produkcreate;
use App\Livewire\Produk\Produkedit;
use App\Livewire\Produk\Produkindex;
use App\Livewire\Register;
use App\Livewire\Tagihan\TagihanCreate;
use App\Livewire\Tagihan\TagihanIndex;
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
Route::Get('halaman-pdf', [TagihanController::class, 'exportpdf']);

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
    Route::Get('tagihan', TagihanIndex::class)->name('tagihan');
    Route::Get('tagihan/create', TagihanCreate::class)->name('tagihan-create');
    Route::Get('export-tagihan/{id}', [TagihanController::class, 'exportpdf'])->name('export-tagihan');
    
    Route::get('logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});
        