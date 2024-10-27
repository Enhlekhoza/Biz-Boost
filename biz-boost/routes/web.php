<?php

use Illuminate\Support\Facades\Route;


// Route for Home page
Route::get('/', function () {
    return view('home.index'); 
});

// Route for Quiz page
Route::get('/quiz', function () {
    return view('quiz.index'); 
});

// Route for Signup page
Route::get('/signup', function () {
    return view('signup.index'); 
});

// Route for Blog page
Route::get('/blog', function () {
    return view('blog.index'); 
});
