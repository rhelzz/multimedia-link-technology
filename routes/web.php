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

// User home route - better to use Route::get instead of resource for root URL
Route::get('/', [UserHomeController::class, 'index'])->name('home');

// Admin Authentication Routes (public)
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// All protected admin routes under one middleware group
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Hero Section & Sliders
    Route::resource('hero-section', HeroSectionController::class);
    Route::post('hero-section/{heroSection}/sliders', [HeroSliderController::class, 'store'])
        ->name('hero-section.sliders.store');
    Route::delete('hero-section/{heroSection}/sliders/{slider}', [HeroSliderController::class, 'destroy'])
        ->name('hero-section.sliders.destroy');
    Route::patch('hero-section/{heroSection}/sliders/{slider}/toggle', [HeroSliderController::class, 'toggle'])
        ->name('hero-section.sliders.toggle');
    Route::get('hero-section/{heroSection}/sliders', [HeroSliderController::class, 'index'])
        ->name('hero-section.sliders.index');
    
    // Features
    Route::resource('features', FeaturesController::class);
    
    // Services
    Route::resource('services', ServicesAdminController::class);
    Route::resource('additional-services', AdditionalServiceController::class);
    
    // Other resources
    Route::resource('partners', PartnerController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('contacts', ContactController::class);
    
    // Branches and Sub-branches
    Route::resource('branches', BranchController::class);
    Route::resource('branches.sub-branches', SubBranchController::class)->parameters([
        'sub-branches' => 'subBranch'
    ]);
});