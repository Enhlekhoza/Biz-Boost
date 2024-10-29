<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use Illuminate\Http\Request;

// Route for Home page
Route::get('/', function () {
    return view('home.index'); 
});

// Route for displaying the signup form
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');

// Route for handling the form submission
Route::post('/signup', [SignupController::class, 'storeSignupData'])->name('signup.store');


// Route for the blog page
Route::get('/blog', function () {
    return view('blog.index'); 
})->name('blog.index'); 


// Display the quiz form
Route::get('/quiz1', function () {
    return view('quiz1.index');
})->name('quiz1.index');


// Handle quiz submission and scoring
Route::post('/quiz/submit', function (Request $request) {
    // Add scoring logic here
    $score = 0;

    // Define scoring based on answers (adjust as needed)
    $answers = [
        'q1' => ['Over R20,000' => 3, 'R10,000 - R20,000' => 2, 'R5,000 - R10,000' => 1, 'Less than R5,000' => 0],
        'q2' => ['Less than R2,500' => 3, 'R2,500 - R7,500' => 2, 'R7,500 - R15,000' => 1, 'Over R15,000' => 0],
        'q3' => ['Yes, regularly' => 3, 'Yes, sometimes' => 1, 'No' => 0],
        'q4' => ['Rarely' => 3, 'Sometimes' => 2, 'Often' => 1, 'Almost always' => 0],
        'q5' => ['Yes, enough for 3+ months' => 3, 'Yes, but less than 3 months' => 1, 'No' => 0],
        'q6' => ['Always on time' => 3, 'Sometimes late' => 1, 'Rarely on time' => 0, 'I have no debt' => 2],
        'q7' => ['Rarely' => 3, 'Sometimes' => 2, 'Often' => 1, 'Always' => 0],
        'q8' => ['Mostly bank payments' => 3, 'Mixed' => 2, 'Mostly cash' => 1],
        'q9' => ['Over 5 years' => 3, '3-5 years' => 2, '1-3 years' => 1, 'Less than 1 year' => 0],
        'q10' => ['More than 5' => 3, '3-5' => 2, '1-2' => 1, 'None' => 0],
        'q11' => ['Very often' => 3, 'Sometimes' => 2, 'Rarely' => 1, 'Never' => 0],
        'q12' => ['Weekly' => 3, 'Bi-weekly' => 2, 'Monthly' => 1, 'Less than once a month' => 0],
        'q13' => ['Growing' => 3, 'Staying the same' => 2, 'Getting fewer customers' => 1, 'Not sure' => 0],
        'q14' => ['Yes' => 3, 'Working on it' => 1, 'No' => 0],
        'q15' => ['Yes' => 3, 'Planning to' => 2, 'No' => 0],
    ];

    // Calculate score based on user responses
    foreach ($answers as $question => $choices) {
        $response = $request->input($question);
        if (isset($choices[$response])) {
            $score += $choices[$response];
        }
    }

    // Determine result message based on score range
    $resultMessage = '';
    if ($score >= 35) {
        $resultMessage = 'Your business financial health is excellent!';
    } elseif ($score >= 20) {
        $resultMessage = 'Your business financial health is average. There is room for improvement.';
    } else {
        $resultMessage = 'Your business financial health needs attention. Consider reviewing your financial practices.';
    }

    // Return results view with score and result message
    return view('quiz.result', ['score' => $score, 'resultMessage' => $resultMessage]);
})->name('quiz.submit');
