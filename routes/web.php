<?php

use App\Http\Controllers\Admin\HeroBannerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/hero-banner', [HeroBannerController::class, 'index'])->name('admin.mainpage.herobanner');
    Route::get('/hero-banner/create', [HeroBannerController::class, 'create'])->name('admin.hero-banner.create');
    Route::post('/hero-banner', [HeroBannerController::class, 'store'])->name('admin.hero-banner.store');
    Route::get('/hero-banner/{id}/edit', [HeroBannerController::class, 'edit'])->name('admin.hero-banner.edit');
    Route::put('/hero-banner/{id}', [HeroBannerController::class, 'update'])->name('admin.hero-banner.update');
    Route::delete('/hero-banner/{id}', [HeroBannerController::class, 'destroy'])->name('admin.hero-banner.destroy');
});
