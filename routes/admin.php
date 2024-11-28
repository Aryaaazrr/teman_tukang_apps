<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin-panel')
    ->name('admin.')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function () {

    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
        Route::post('/login', [LoginController::class, 'store'])->name('auth.login.process');
        Route::get('/logout', [LogoutController::class, 'index'])->name('auth.logout');
    });
});