<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdiController;

Route::get('/', fn() => redirect()->route('products.index'));
Route::resource('products', ProductController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('berita', BeritaController::class);
Route::resource('prodi', ProdiController::class);
