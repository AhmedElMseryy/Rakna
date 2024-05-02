<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {

        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Create a new subscriber
        Subscriber::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        // Redirect back or wherever you want after storing
        return back()->with('success', 'Subscriber added successfully!');
    }
}
