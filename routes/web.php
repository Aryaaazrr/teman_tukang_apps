<?php

use App\Http\Controllers\Website\About\AboutController;
use App\Http\Controllers\Website\Contact\ContactController;
use App\Http\Controllers\Website\FAQ\FAQController;
use App\Http\Controllers\Website\Features\FeaturesController;
use App\Http\Controllers\Website\Home\HomeController;
use App\Http\Controllers\Website\Profile\ProfileController;
use App\Http\Controllers\Website\Services\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('about', [AboutController::class, 'index'])->name('about.index');

Route::get('features', [FeaturesController::class, 'index'])->name('features.index');

Route::get('services', [ServicesController::class, 'index'])->name('services.index');

Route::get('faq', [FAQController::class, 'index'])->name('faq.index');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';