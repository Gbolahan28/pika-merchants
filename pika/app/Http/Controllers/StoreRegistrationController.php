<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use App\Models\StoreRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class StoreRegistrationController extends Controller
{
public function store(Request $request)
{
    try {
        $validatedData = $request->validate([
            'storename' => 'required|string|max:255',
            'ownername' => 'required|string|max:255',
            'stateOfOperation' => 'required|string',
            'businessAddress' => 'required|string',
            'email' => 'required|email|unique:store_registrations',
            'phone_number' => 'required|string',
            'instagram' => 'required|string',
            'twitter' => 'nullable|string',
            'website' => 'nullable|url',
            'referralink' => 'nullable|string',
        ]);

        $registration = StoreRegistration::create($validatedData);
        $token = Str::random(64);
        $registration->update([
            'email_verification_token' => $token,
        ]);

        Mail::to($registration->email)->send(new VerificationEmail($token));

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'redirect' => route('email-confirmation'),
                'message' => 'Registration successful! Please check your email for verification.'
            ]);
        }

        return redirect()->route('email-confirmation')
            ->with('success', 'Registration successful! Please check your email for verification.')
            ->with('email', $validatedData['email']);

    } catch (\Illuminate\Validation\ValidationException $e) {
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
        throw $e;
    } catch (\Exception $e) {
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration. Please try again.',
                'debug_message' => $e->getMessage() // Remove this in production
            ], 500);
        }
        throw $e;
    }
}
  public function showEmailConfirmation()
    {
        return view('email-confirm');
    }

public function sendEmailConfirmation(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:store_registrations,email'
        ]);

        try {
            $registration = StoreRegistration::where('email', $request->email)->first();
            
            // Generate new verification token
            $token = Str::random(64);
            $registration->update([
                'email_verification_token' => $token,
            ]);

            // Send verification email
            Mail::to($request->email)->send(new VerificationEmail($token));

            return response()->json(['message' => 'Verification email sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send verification email'], 500);
        }
    }

    public function verifyEmail($token)
    {
        $registration = StoreRegistration::where('email_verification_token', $token)->first();

        if (!$registration) {
            return redirect()->route('invalid-token')
                            ->with('error', 'Invalid or expired verification token');
        }

        try {
            $registration->update([
                'email_verified_at' => now(),
                'email_verification_token' => null,
            ]);

            return redirect()->route('verification-success')
                            ->with('success', 'Email verified successfully!');
        } catch (\Exception $e) {
            return redirect()->route('invalid-token')
                            ->with('error', 'An error occurred during verification');
        }
    }

    public function verificationSuccess()
    {
        if (!session('success')) {
            return redirect()->route('index');
        }
        return view('verification-success');
    }

    public function invalidToken()
    {
        return view('invalid-token');
    }
}