<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    ##----------------------------------------------INDEX
    public function index()
    {
        $appointments = Appointment::with('user')->get();
        return view('theme.parkingTime', compact('appointments'));
    }

    ##----------------------------------------------CREATE
    public function create()
    {
        return view('theme.parkingTime');
    }

    ##----------------------------------------------STORE
    public function store(Request $request)
    {
        $request->validate([
            'place' => 'required|string|max:255',
            'time_from' => 'required|date',
            'time_to' => 'required|date|after:time_from',
        ]);

        $appointment = new Appointment([
            'user_id' => auth()->id(),
            'place' => $request->place,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
        ]);
        $appointment->save();

        $time = Appointment::latest('id')->first();
        $qr = $time->place . $time->time_from . $time->created_at;

        DB::table('qrs')->insert([
            'qr' => $qr,
            'appointment_id' => $time->id,

        ]);

        return redirect()->route('product.parking')->with('success Time', 'Appointment booked successfully!');
    }

    ##----------------------------------------------CANCEL
    // public function remove($id)
    // {
    //     Appointment::destroy($id);
    //     return redirect('/ticket');
    // }

    ##----------------------------------------------EDIT


}
