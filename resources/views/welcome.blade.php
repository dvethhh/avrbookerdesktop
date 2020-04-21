@extends('layouts.app')

@section('content')
<div class="wrapper create-booking">
    <h2>Create Booking</h2>
    <hr>
    <form action="/" method="POST">
        @csrf
        <Table style="width:40%">
            <tr>
                <td><label for="AVR">Select Room</label></td>
                <td><select name="AVR" id="AVR">
                        <option value="">---</option>
                        <option value="AVR 1">AVR 1</option>
                        <option value="AVR 2">AVR 2</option>
                        <option value="AVR 3">AVR 3</option>
                        <option value="AVR 4">AVR 4</option>
                    </select> </td>

                <td> <label for="date">Select date:</label> </td>
                <td> <input type="date" id="date" min={{ date('Y-m-d') }}><br> </td>

            </tr>
            <tr>
                <td> <label for="timestart">Select start time:</label> </td>
                <td> <input type="time" id="timestart" list="limittimeslist"></td>
                <td> <label for="timeend">Select end time:</label> </td>
                <td> <input type="time" id="timeend" list="limittimeslist"></td>

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
        </Table>
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
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
        </tr>
        <tr>
            <td>May 1,2020</td>
            <td>8:00 AM</td>
            <td>12:00PM</td>
        </tr>
        <tr>
            <td>May 8,2020</td>
            <td>8:00 AM</td>
            <td>12:00PM</td>
        </tr>
    </table>
</div>
@endsection