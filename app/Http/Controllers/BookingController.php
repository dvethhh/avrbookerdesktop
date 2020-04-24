<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $user = request()->user();


        $bookings = Booking::where('useremail', $user->email)->orderBy('startdate')->orderBy('timestart')->get();
        return view('bookings.index', [
            'bookings' => $bookings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'avr' => 'required', 'startdate' => 'required', 'timestart' => 'required', 'timeend' => 'required',
        ]);

        $bookings = new Booking();
        $bookings->startdate = request('startdate');
        $bookings->useremail = request('email');
        $bookings->enddate = request('startdate');
        $bookings->timestart = request('timestart');
        $bookings->timeend = request('timeend');
        $bookings->avr = request('avr');
        $bookings->specialrequests = request('specialrequests');
        $bookings->save();
        return redirect('/bookings')->with('success', 'Booking Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);


        return view('bookings.show', ['booking' => $booking]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {


        $this->validate(request(), [
            'avr' => 'required', 'startdate' => 'required', 'timestart' => 'required', 'timeend' => 'required_with:gt:timestart',
        ]);

        $bookings = Booking::findOrFail($id);
        $bookings->startdate = request('startdate');
        $bookings->enddate = request('startdate');
        $bookings->timestart = request('timestart');
        $bookings->timeend = request('timeend');
        $bookings->avr = request('avr');
        $bookings->specialrequests = request('specialrequests');
        $bookings->save();

        return redirect('/bookings')->with('update', 'Booking Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();

        return redirect('/bookings');
    }
}
