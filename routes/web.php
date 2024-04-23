<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'welcome');
Route::view('/artefatos', 'artefatos');
Route::view('/contato', 'contato');
Route::view('/login', 'login');
Route::view('/tipo', 'tipo');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
