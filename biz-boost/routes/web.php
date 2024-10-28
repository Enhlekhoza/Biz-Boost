<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

// Route for Home page
Route::get('/', function () {
    return view('home.index'); 
});

// Route for signup page using the controller
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'storeSignupData'])->name('signup.store');
