<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    ##-------------------------------------------- STORE REVIEW
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rate' => 'required|string|max:255',
            'email' => 'required|email',
            'comment' => 'required|string',
        ]);

        review::create($request->all());

        return back()->with('rev', 'Review submitted successfully!');
    }
    ##------------------------------------------ REVIEWS
    // public function displayReviews()
    // {    
    //     return view('theme.reviews');
    // }
}
