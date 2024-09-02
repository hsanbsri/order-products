<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [OrderController::class, 'index'])->name('index.index');
route::get('/orders', [OrderController::class, 'index'])->name('orders.index');