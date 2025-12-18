<?php

use Illuminate\Support\Facades\Route;

// HOME (pakai UI home.blade.php)
Route::get('/', fn () => view('home'));

// PRODUCT DETAIL (UI)
Route::get('/products/{id}', fn ($id) => view('products.show', compact('id')));

// SELLER DASHBOARD (UI)
Route::get('/seller/dashboard', fn () => view('seller.dashboard'));

// SELLER PRODUCTS UI (CRUD tampilan)
Route::prefix('seller')->group(function () {
    Route::get('/products', fn () => view('seller.products.index'));
    Route::get('/products/create', fn () => view('seller.products.create'));
    Route::get('/products/{id}/edit', fn ($id) => view('seller.products.edit', compact('id')));
});

// (Optional) kalau belum ada file buyer/cart, buyer/orders, chat/index, jangan aktifkan dulu.
// Route::get('/cart', fn () => view('buyer.cart'));
// Route::get('/orders', fn () => view('buyer.orders'));
// Route::get('/chat', fn () => view('chat.index'));
