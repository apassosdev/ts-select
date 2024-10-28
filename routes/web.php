<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestSelect;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('test',[TestSelect::class,'search'])->name('test');

require __DIR__.'/auth.php';
