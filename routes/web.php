<?php

use App\Http\Controllers\Website\About\AboutController;
use App\Http\Controllers\Website\Booking\BookingController;
use App\Http\Controllers\Website\Contact\ContactController;
use App\Http\Controllers\Website\Document\DocumentController;
use App\Http\Controllers\Website\FAQ\FAQController;
use App\Http\Controllers\Website\Favorite\FavoriteController;
use App\Http\Controllers\Website\Features\FeaturesController;
use App\Http\Controllers\Website\Home\HomeController;
use App\Http\Controllers\Website\Profile\ProfileController;
use App\Http\Controllers\Website\Services\ServicesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('about', [AboutController::class, 'index'])->name('about.index');

Route::get('features', [FeaturesController::class, 'index'])->name('features.index');

Route::get('services', [ServicesController::class, 'index'])->name('services.index');

Route::get('faq', [FAQController::class, 'index'])->name('faq.index');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth', 'verified', 'role:'.User::ROLE_CUSTOMER])->group(function () {
    Route::get('booking', [BookingController::class, 'index'])->name('booking.index');

    Route::get('document', [DocumentController::class, 'index'])->name('document.index');

    Route::get('favorite', [FavoriteController::class, 'index'])->name('favorite.index');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');

        Route::prefix('edit')->name('edit.')->group(function () {
            Route::get('/', [ProfileController::class, 'index'])->name('index');
            Route::get('/photo', [ProfileController::class, 'editPhoto'])->name('photo');
            Route::get('/data', [ProfileController::class, 'editAccount'])->name('data');
            Route::get('/alamat', [ProfileController::class, 'editAddress'])->name('alamat');
        });
        // Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';