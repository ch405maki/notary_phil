<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MessageController extends Controller
{
    public function index(){

        $messages = Contact::latest()->get();
        return Inertia::render('Authenticated/Messages/Index', [
            'messages' => $messages
        ]);
    }

}
