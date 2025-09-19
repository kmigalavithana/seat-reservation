<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'home'])->name('home');


Route::get('/home', [AdminController::class, 'index'])->name('home');
