<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/login', [PageController::class, 'showlogin'])->name('login');
Route::post('/login', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
