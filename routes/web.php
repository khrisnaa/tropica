<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('categories', Controller::class);

    Route::resource('tour-packages', Controller::class);

    Route::resource('tour-photos', Controller::class);

    Route::resource('reviews', Controller::class);

    Route::resource('banks', Controller::class);

    Route::resource('bookings', Controller::class);

});

require __DIR__ . '/auth.php';
