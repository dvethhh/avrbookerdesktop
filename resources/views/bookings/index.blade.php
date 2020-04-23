@extends('layouts.app')

@section('content')

<div class="wrapper create-booking">
    <h2>Create Booking </h2>
    <form action="/bookings" method="POST">
        @csrf
        <Table style="width:40%">
            <tr>
                <td><label for="AVR">Select Room</label></td>
                <td><select name="avr" id="AVR">
                        <option value="">---</option>
                        <option value="AVR 1">AVR 1</option>
                        <option value="AVR 2">AVR 2</option>
                        <option value="AVR 3">AVR 3</option>
                        <option value="AVR 4">AVR 4</option>
                    </select> </td>

                <td> <label for="date">Select date:</label> </td>
                <td> <input type="date" name="startdate" id="startdate" min={{ date('Y-m-d') }}><br> </td>

            </tr>
            <tr>
                <td> <label for="timestart">Select Start Time:</label> </td>
                <td> <input type="time" name="timestart" id="timestart" list="limittimeslist"></td>
                <td> <label for="timeend">Select End Time:</label> </td>
                <td> <input type="time" name="timeend" id="timeend" list="limittimeslist"></td>

            </tr>
            <tr>
                <td> <label for="repeat">Repeat</label></td>
                <td> <select name="repeat" id="repeat">
                        <option value="Never">Never</option>
                        <option value="Daily">Daily</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                    </select></td>
                <td><label for="date">End On:</label></td>
                <td><input type="date" id="enddate" min={{ date('Y-m-d') }}></td>
            </tr>
            <tr>
                <td> <label for="specialrequests">Special Requests</label></td>
                <td> <input type="text" name="specialrequests" id="specialrequests"></td>
            </tr>
        </Table>
        <input type="hidden" name="email" id="email" value={{Auth::user()->email }}>
        <input type="submit" value="Create Booking">
    </form>

    <datalist id="limittimeslist">
        <option value="07:00">
        <option value="08:00">
        <option value="09:00">
        <option value="10:00">
        <option value="11:00">
        <option value="12:00">
        <option value="13:00">
        <option value="14:00">
        <option value="15:00">
        <option value="16:00">
        <option value="17:00">
        <option value="18:00">
        <option value="19:00">
        <option value="20:00">
    </datalist>

</div>

<div class="wrapper manage-my-bookings">
    <h2>Manage My Bookings</h2>

    <table style="width:100%">
        <tr>
            <th style="text-align: center">Select to Edit</th>
            <th>Date</th>
            <th>AVR</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Special Requests</th>

        </tr>

        @foreach($bookings as $booking)

        <tr>

            <td style="text-align: center"><a href="/bookings/{{$booking->id}}">Edit</a></td>
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