<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create-new', [ProductController::class, 'getProductCreateForm'])->name('product.createForm');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}', [ProductController::class, 'get'])->name('product.get');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.destroy');


