<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicRegistrationController;

Route::get('/', [PublicRegistrationController::class, 'create']);
Route::get('/register', [PublicRegistrationController::class, 'create'])->name('register.form');
Route::post('/register', [PublicRegistrationController::class, 'store'])->name('register.store');
