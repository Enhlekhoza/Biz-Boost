<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

// Route for Home page
Route::get('/', function () {
    return view('home.index'); 
});

// Route for displaying the signup form
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');

// Route for handling the form submission
Route::post('/signup', [SignupController::class, 'storeSignupData'])->name('signup.store');
