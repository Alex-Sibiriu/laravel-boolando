<?php

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
    $products = config('products');

    return view('home', compact('products'));
})->name('home');

Route::get('/uomo', function () {
    $products = config('products');

    return view('man', compact('products'));
})->name('man');

Route::get('/donna', function () {
    $products = config('products');

    return view('woman', compact('products'));
})->name('woman');

Route::get('/bambini', function () {
    $products = config('products');

    return view('children', compact('products'));
})->name('children');
