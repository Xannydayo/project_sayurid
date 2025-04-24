<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak', [HomeController::class, 'contact']);
Route::get('/produk', [ProductController::class, 'product']);
Route::get('/produk/{slug}', [ProductController::class, 'product']);