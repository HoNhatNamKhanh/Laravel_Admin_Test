<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function(){
    $products = Product::all();
    return view('welcome', compact('products'));
})->name('home');


Auth::routes();

// Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/products', [HomeController::class, 'product'])->name('products');

Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);





