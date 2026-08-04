<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerContactMail;
use App\Mail\AdminContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Send email to customer
        Mail::to($validatedData['email'])->send(new CustomerContactMail($validatedData));

        // Send email to admin (default email from .env or config)
        $adminEmail = config('mail.from.address');
        Mail::to($adminEmail)->send(new AdminContactMail($validatedData));

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your response, our team will contact you soon.'
            ]);
        }

        return back()->with('success', 'Thank you for your response, our team will contact you soon.');
    }
}
