<?php

use App\Livewire\Admin\Dashboard\DashboardSales;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',DashboardSales::class)->name('dashboard.sales');
