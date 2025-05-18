<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create-new', [ProductController::class, 'getProductCreateForm'])->name('product.createForm');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'get']);
