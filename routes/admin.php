<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Master\CategoryController;
use App\Http\Controllers\Admin\Master\ServiceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::prefix('admin-panel')
    ->name('admin.')
    ->group(function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::middleware(['guest'])->group(function () {
            Route::get('login', [AuthenticatedSessionController::class, 'index'])->name('auth.login');
            Route::post('login', [AuthenticatedSessionController::class, 'storeAdmin'])->name('auth.login.process');
        });
    });

    Route::middleware(['auth', 'permission:admin panel access'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::prefix('master')->group(function () {
            Route::resource('category', ServiceController::class);
            Route::resource('service', ServiceController::class);
        });

        Route::prefix('transaction')->group(function () {
            Route::resource('category', ServiceController::class);
            Route::resource('service', ServiceController::class);
        });
    });
});