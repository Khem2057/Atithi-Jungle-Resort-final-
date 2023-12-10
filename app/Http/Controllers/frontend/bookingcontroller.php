<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\room;
use Illuminate\Http\Request;

class bookingcontroller extends Controller
{
    public function index(){
        $data['rooms'] = room::all();
        return view('frontend.booking',$data);
    }

    public function checkAvailability(Request $request)
{
    $checkInDate = $request->input('checkin');
    $checkOutDate = $request->input('checkout');

    // Query the database to find available rooms for the given date range.
    $availableRooms = booking::where(function ($query) use ($checkInDate, $checkOutDate) {
        $query->where('checkin', '>', $checkOutDate)
            ->orWhere('checkout', '<', $checkInDate);
    })->orWhere('is_available', true)->get();

    // Return available room data to the view.
    return view('booking', compact('availableRooms'));
}
}
