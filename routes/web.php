<?php

use App\Livewire\Auth;
use App\Livewire\Dashboard;
use App\Livewire\Product;
use App\Livewire\Produk\Produkcreate;
use App\Livewire\Produk\Produkedit;
use App\Livewire\Produk\Produkindex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Get('login', Auth::class)->name('login');

// Route::group([
//         'middleware' => ['auth']
//     ], function() {

// });

Route::Get('dashboard', Dashboard::class)->name('dashboard');

Route::Get('produk', Produkindex::class)->name('produk');
Route::Get('produk/create', Produkcreate::class)->name('produk-create');
Route::Get('produk/{id}/edit', Produkedit::class)->name('produk-edit');
        