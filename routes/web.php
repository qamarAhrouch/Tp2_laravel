<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products/insert', [ProductsController::class, 'insert'])->name('products.insert');
Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/update/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::get('products/delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');
Route::get('products/delete/all/truncate', [ProductsController::class, 'deleteAllTruncate'])->name('products.deleteAll.truncate');

//Route::resource('products', \App\Http\Controllers\PrdContoller::class);
