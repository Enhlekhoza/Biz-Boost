<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LoanOption;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Fetch the logged-in user
        $user = $request->user(); 

        // Retrieve the user's credit score
        $creditScore = $user->credit_score;

        // Determine the credit level based on the credit score
        if ($creditScore >= 700) {
            $creditLevel = 'high';
        } elseif ($creditScore >= 500) {
            $creditLevel = 'medium';
        } else {
            $creditLevel = 'low';
        }

        // Fetch loan options for the user's credit level
        $loanOptions = LoanOption::where('credit_level', $creditLevel)->get();

        // Return the dashboard view with the necessary data
        return view('dashboard', compact('user', 'creditScore', 'creditLevel', 'loanOptions'));
    }
}
