<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\SubBranchController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\HeroSliderController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ServicesAdminController;
use App\Http\Controllers\Admin\AdditionalServiceController;

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

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('additional-services', AdditionalServiceController::class);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('partners', PartnerController::class);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('faqs', FaqController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('contacts', ContactController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('branches', BranchController::class);
    
    // Rute nested untuk sub cabang
    Route::resource('branches.sub-branches', SubBranchController::class)->parameters([
        'sub-branches' => 'subBranch'
    ]);
});