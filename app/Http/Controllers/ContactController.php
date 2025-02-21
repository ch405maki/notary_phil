<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Save to database
    Contact::create($validated);

    // Send email to the user
    Mail::to($validated['email'])->send(new ContactMail($validated));

    return response()->json(['message' => 'Your message has been sent successfully! Check your email.'], 201);
}
}
