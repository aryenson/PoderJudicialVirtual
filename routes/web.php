<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\inicioLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\productosController;


Route::get('/', [productosController::class, 'index'])
    ->middleware('auth')
    ->name('home.index');

Route::post('/home', [productosController::class, 'store'])
    ->name('home.store');


Route::get('/register', [registroController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [registroController::class, 'store'])
    ->name('register.store');



Route::get('/login', [inicioLoginController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [inicioLoginController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [inicioLoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');


