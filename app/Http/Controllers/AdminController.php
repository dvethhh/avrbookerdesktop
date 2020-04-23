<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
    
        $bookings = Booking::orderBy('startdate')->orderBy('timestart')->get();
        return view('bookings.admin', [
            'bookings' => $bookings,
        ]);
    }
}
