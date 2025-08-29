<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('kategori-buku', KategoriBukuController::class)
    ->parameters(['kategori-buku' => 'kategori'])
    ->names('kategori');

Route::resource('buku', BukuController::class)->names('buku');
