<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FakultasController;

Route::get('/', fn() => redirect()->route('products.index'));
Route::resource('products', ProductController::class);
Route::resource('fakultas', FakultasController::class);