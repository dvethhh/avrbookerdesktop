@extends('layouts.app')

@section('content')
<div class="wrapper manage-my-bookings">
    <h2>Manage Bookings</h2>

    <table style="width:100%">
        <tr>
            <th style="text-align: center">Select to Edit</th>
            <th>Email</th>
            <th>Date</th>
            <th>AVR</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Special Requests</th>

        </tr>

        @foreach($bookings as $booking)

        <tr>

            <td style="text-align: center"><a href="/bookings/{{$booking->id}}">Edit</a></td>
            <td>{{$booking->useremail}}</td>
            <td>{{$booking->startdate}}</td>
            <td>{{$booking->avr}}</td>
            <td>{{$booking->timestart}}</td>
            <td>{{$booking->timeend}}</td>
            <td>{{$booking->specialrequests}}</td>

        </tr>

        @endforeach

    </table>


</div>
@endsection