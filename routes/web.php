<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Homepage route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Optional: /home route (already exists)
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
