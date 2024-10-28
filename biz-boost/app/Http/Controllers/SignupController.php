<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    // Display the sign-up form
    public function showSignupForm()
    {
        return view('signup.index');
    }

    // Handle the form submission
    public function storeSignupData(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fullName' => 'required|string|max:255',
            'idNumber' => 'required|string|max:13',
            'dob' => 'required|date',
            'address' => 'required|string',
            'contactNumber' => 'required|string|max:15',
            'businessType' => 'nullable|string',
            'registeredBusiness' => 'nullable|string',
            'operationalDuration' => 'nullable|string',
            'pep' => 'nullable|string',
            'businessIncome' => 'nullable|string',
            'taxId' => 'nullable|string',
            'bankAccount' => 'nullable|string',
            // Add validations for other fields
        ]);

        // You can now save the validated data to the database or process it further

        return redirect()->route('signup')->with('success', 'Form submitted successfully!');
    }
}
