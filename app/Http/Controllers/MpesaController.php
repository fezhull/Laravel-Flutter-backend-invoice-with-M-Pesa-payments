<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
    public function initiatePayment(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'phone_number' => 'required|string',
        ]);

        // Implement your M-Pesa API integration here
        // Example: Call M-Pesa API to initiate payment
        
        // Return response
        return response()->json(['message' => 'Payment initiated successfully'], 200);
    }
}
