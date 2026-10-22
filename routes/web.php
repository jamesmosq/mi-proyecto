<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

// ruta services
Route::get('/services',[ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create',[ServiceController::class, 'create'])->name('services.create');
Route::post('/services',[ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}',[ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{service}/edit',[ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}',[ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}',[ServiceController::class, 'destroy'])->name('services.destroy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/consulting', function () {
    return view('consulting');
})->name('consulting');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
