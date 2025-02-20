<?php

use App\Livewire\Admin\Dashboard\DashboardSales;
use App\Livewire\Admin\Produk\ProdukList;
use App\Livewire\Store\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',DashboardIndex::class)->name('dashboard.store.index');
Route::get('/admin',DashboardSales::class)->name('dashboard.sales');
Route::get('/produk',ProdukList::class)->name('produk.list');
