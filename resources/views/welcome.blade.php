@extends('layouts.app')

@section('content')
<div class="wrapper avrbooker-title">
    <div class="jumbotron">
        <h1>AVR Booker</h1>
        <p><a href="/login">Login</a> or <a href="/register">Register</a> to <a href="/bookings">Book an AVR</a></p>
    </div>
</div>
<p>
    <ul class="linksbar" id="menu">
        <li><a href="/bookings">Bookings</a> | </li>
        <li><a href="/login">Login</a> | </li>
        <li><a href="/register">Register</a> | </li>
        <li><a href="/admin">Admin</a></li>
    </ul>
</p>
@endsection