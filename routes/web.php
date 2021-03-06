<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('layouts.admin');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

//USER
Route::resource('users', UserController::class);

//PRODUCTS
Route::get('products/{user_id}', [ProductController::class, 'getProductsByUser']);
Route::resource('products', ProductController::class);
