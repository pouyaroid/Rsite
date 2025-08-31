<?php

use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\HeroBannerController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index'])->name('home');
// Route::prefix('admin')->middleware('admin')->group(function () {
//     Route::get('/hero-banner', [HeroBannerController::class, 'index'])->name('admin.mainpage.herobanner');
//     Route::get('/hero-banner/create', [HeroBannerController::class, 'create'])->name('admin.hero-banner.create');
//     Route::post('/hero-banner', [HeroBannerController::class, 'store'])->name('admin.hero-banner.store');
//     Route::get('/hero-banner/{id}/edit', [HeroBannerController::class, 'edit'])->name('admin.hero-banner.edit');
//     Route::put('/hero-banner/{id}', [HeroBannerController::class, 'update'])->name('admin.hero-banner.update');
//     Route::delete('/hero-banner/{id}', [HeroBannerController::class, 'destroy'])->name('admin.hero-banner.destroy');
// });
Route::prefix('admin')->group(function () {
        Route::get('/hero-banner', [HeroBannerController::class, 'index'])->name('admin.mainpage.herobanner');
        Route::get('/hero-banner/create', [HeroBannerController::class, 'create'])->name('admin.hero-banner.create');
        Route::post('/hero-banner', [HeroBannerController::class, 'store'])->name('admin.hero-banner.store');
        Route::get('/hero-banner/{id}/edit', [HeroBannerController::class, 'edit'])->name('admin.hero-banner.edit');
        Route::put('/hero-banner/{id}', [HeroBannerController::class, 'update'])->name('admin.hero-banner.update');
        Route::delete('/hero-banner/{id}', [HeroBannerController::class, 'destroy'])->name('admin.hero-banner.destroy');
    });
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

Route::resource('packages', PackageController::class);
Route::get('/paneladmin',[AdminPanelController::class,'index']);

Route::get('/settings',[SettingsController::class,'index'])->name('admin.settings');
// Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

//     // Hero Banner
//     Route::get('/hero-banner', [HeroBannerController::class, 'index'])->name('admin.mainpage.herobanner');
//     Route::get('/hero-banner/create', [HeroBannerController::class, 'create'])->name('admin.hero-banner.create');
//     Route::post('/hero-banner', [HeroBannerController::class, 'store'])->name('admin.hero-banner.store');
//     Route::get('/hero-banner/{id}/edit', [HeroBannerController::class, 'edit'])->name('admin.hero-banner.edit');
//     Route::put('/hero-banner/{id}', [HeroBannerController::class, 'update'])->name('admin.hero-banner.update');
//     Route::delete('/hero-banner/{id}', [HeroBannerController::class, 'destroy'])->name('admin.hero-banner.destroy');

//     // Services
//     Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
//     Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
//     Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');

//     // Testimonials
//     Route::get('/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
//     Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
//     Route::post('/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');

//     // Packages
//     Route::resource('packages', PackageController::class, [
//         'as' => 'admin' // این باعث میشه نام روت‌ها بشه مثلا admin.packages.index
//     ]);

//     // Admin Panel
//     Route::get('/paneladmin', [AdminPanelController::class, 'index'])->name('admin.panel');

//     // Settings
//     Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
// });