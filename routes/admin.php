<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('dashboard', function () {
    return Inertia::render('admin/Dashboard');
})->middleware(['auth', 'verified', 'app_view'])->name('dashboard');
