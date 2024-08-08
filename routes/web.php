<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', App\Http\Controllers\WelcomeController::class);

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
