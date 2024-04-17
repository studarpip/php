<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferencesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Home route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Login/Logout routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//Conference page route
Route::resource('conference', ConferencesController::class);
