<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['store_view'])->group(function(){
    Route::get('/', function () {
        return Inertia::render('store/Home');
    })->name('home');
    Route::get('/shop', function () {
        return Inertia::render('store/Shop');
    })->name('shop');
    Route::get('/detail-produk', function () {
        return Inertia::render('store/DetailProduct');
    })->name('detail-product');
    Route::get('/keranjang', function () {
        return Inertia::render('store/Cart');
    })->name('cart');
    Route::get('/tentang-kami', function () {
        return Inertia::render('store/About');
    })->name('about');
    Route::get('/pusat-bantuan', function () {
        return Inertia::render('store/Help');
    })->name('help');
    Route::get('/profile-saya', function () {
        return Inertia::render('store/Profile');
    })->name('help');
});