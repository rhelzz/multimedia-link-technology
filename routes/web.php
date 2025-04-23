<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\HeroSliderController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\ServicesAdminController;

Route::resource('/', UserHomeController::class);

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Protected admin routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::resource('hero-section', HeroSectionController::class);
    
    // Slider routes
    Route::post('hero-section/{heroSection}/sliders', [HeroSliderController::class, 'store'])
        ->name('hero-section.sliders.store');
    Route::delete('hero-section/{heroSection}/sliders/{slider}', [HeroSliderController::class, 'destroy'])
        ->name('hero-section.sliders.destroy');
    Route::patch('hero-section/{heroSection}/sliders/{slider}/toggle', [HeroSliderController::class, 'toggle'])
        ->name('hero-section.sliders.toggle');
    Route::get('hero-section/{heroSection}/sliders', [HeroSliderController::class, 'index'])
        ->name('hero-section.sliders.index');
});

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    // Routes for Features
    Route::resource('features', FeaturesController::class);
});

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::resource('services', ServicesAdminController::class);
});