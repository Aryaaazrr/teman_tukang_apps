<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('admin-panel')
    ->name('admin.')
    ->group(function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::middleware('guest')->group(function () {
            Route::get('login', [LoginController::class, 'index'])->name('auth.login');
            Route::post('login', [LoginController::class, 'store'])->name('auth.login.process');
        });
        Route::get('logout', [LogoutController::class, 'index'])->middleware('auth')->name('auth.logout');
    });

    Route::middleware(['auth', 'permission:admin panel access'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });
});
