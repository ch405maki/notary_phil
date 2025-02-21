<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return Inertia::render('Welcome/Index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Pricing
Route::get('/pricing', function () {return Inertia::render('Pricing/Index');})->name('pricing.index');

// Contacts
Route::get('/contact', function () {return Inertia::render('Contact/Index');})->name('contact.index');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Email
Route::middleware('auth')->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
});

// 404
Route::get('/empty', function () {return Inertia::render('EmptyState/404');})->name('empty.404');

// Mail
Route::get('/test-email', function () {
    $details = [
        'subject' => 'Re: Your Recent Inquiry - Message Received',
        'body' => 'Dear [Recipient Name],
    
        Thank you for reaching out to us. We appreciate the time you took to contact us, and we acknowledge receipt of your message.
        
        We will review your message and respond as soon as possible. Please expect a response from us within 24-48 hours.
        
        Thank you again for your patience and understanding.
        
        Best regards,
        NotaryPhil',
        ];

    Mail::raw($details['body'], function ($message) use ($details) {
        $message->from('admin@barangaybulanaocentro.com', 'NotaryPhil')
                ->to('jesacim322@envoes.com')
                ->subject($details['subject']);
    });

    return 'Test email sent!';
});

require __DIR__.'/auth.php';
