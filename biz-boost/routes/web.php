<?php

use Illuminate\Support\Facades\Route;


// Route for Home page
Route::get('/', function () {
    return view('home.index'); 
});

// Route for signup page

Route::get('/signup', function () {
    return view('signup.index');
})->name('signup');