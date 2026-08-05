<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Authentication
Route::prefix('auth')->name('auth.')->group(function () {
    // Sign In Page
    Route::get('/sign-in', function () {
        return view('sign-in');
    })->name('sign-in');
    // Sign Up Page
    Route::get('/sign-up', function () {
        return view('sign-up');
    })->name('sign-up');
});

