<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicRegistrationController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\LanguageController;

Route::get('/', [PublicRegistrationController::class, 'create']);
Route::get('/register', [PublicRegistrationController::class, 'create'])->name('register.form');
Route::post('/register', [PublicRegistrationController::class, 'store'])->name('register.store');

Route::get('/checkin/{id}', [CheckinController::class, 'show'])->name('checkin');
Route::post('/checkin/{id}', [CheckinController::class, 'process'])->name('checkin.process');

// Language switching route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');
