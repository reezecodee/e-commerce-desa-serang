<?php

use App\Http\Controllers\Datatable\MitraUMKMController;
use Illuminate\Support\Facades\Route;

Route::get('data-mitra-umkm', MitraUMKMController::class)->name('datatable.mitra-umkm');