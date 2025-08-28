<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('users', UserController::class);
Route::resource('books', BookController::class);
Route::resource('categories', CategoriesController::class);
