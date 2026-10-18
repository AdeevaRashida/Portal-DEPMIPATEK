<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/depmipatek', [PageController::class, 'depmipatek'])->name('depmipatek');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
