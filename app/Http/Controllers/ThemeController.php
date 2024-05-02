<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\review;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    ##--------------------------------- About
    public function about()
    {
        return view('theme.about');
    }

    ##--------------------------------- Contact
    public function contact()
    {
        return view('theme.contact');
    }
    ##--------------------------------- Home
    public function home()
    {
        return view('theme.home');
    }

    ##--------------------------------- Reviews
    public function reviews()
    {
        return view('theme.reviews');
    }
    ##--------------------------------- Parking Time
    public function parkingtime()
    {
        return view('theme.parkingTime');
    }

    ##--------------------------------- Payment Method 
    public function wallet()
    {
        return view('theme.wallet');
    }
    ##--------------------------------- Thank You 
    public function thank()
    {
        return view('theme.thankyou');
    }

    ##--------------------------------- Ticket Summary 
    public function ticket()
    {
        $time = Appointment::latest('id')->first();
        return view('theme.ticket', compact('time'));
    }
    ##--------------------------------- Ticket-Past Summary 
    public function ticketPast()
    {
        $PastTime = Appointment::get();
        return view('theme.ticketPast', compact('PastTime'));
    }
}
