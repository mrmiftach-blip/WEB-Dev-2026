<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Group routes berdasarkan URI /products dan Controller ProductController
Route::prefix('products')->controller(ProductController::class)->group(function () {
    // Route untuk menampilkan semua produk (index)
    Route::get('/', 'index')->name('products.index');

    // Route untuk menampilkan form create produk
    Route::get('/create', 'create')->name('products.create');

    // Route untuk menyimpan produk baru
    Route::post('/store', 'store')->name('products.store');

    // Route untuk menampilkan detail produk
    Route::get('/show/{id}', 'show')->name('products.show');

    // Route untuk menampilkan form edit produk
    Route::get('/edit/{id}', 'edit')->name('products.edit');

    // Route untuk mengupdate produk
    Route::post('/update/{id}', 'update')->name('products.update');
});
