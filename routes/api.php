<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [App\Domains\Core\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [App\Domains\Core\Http\Controllers\AuthController::class, 'register'])->name('auth.register');
Route::post('/logout', [App\Domains\Core\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');


