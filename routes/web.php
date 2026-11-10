<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rute Publik 
Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

// Rute Terproteksi
Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
    Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');
    Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update', [PageController::class, 'updateProfile'])->name('profile.update');
});
