<?php

use App\Livewire\Admin\Dashboard\DashboardSales;
use App\Livewire\Admin\Produk\ProdukList;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',DashboardSales::class)->name('dashboard.sales');
Route::get('/produk',ProdukList::class)->name('produk.list');
