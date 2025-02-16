<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 404
Route::get('/empty', function () {return Inertia::render('EmptyState/404');})->name('empty.404');


require __DIR__.'/auth.php';
