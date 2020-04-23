<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::request('/', 'BookingController@index');
Route::get('/bookings', 'BookingController@index')->middleware('auth');
Route::get('/admin', 'AdminController@admin')->middleware('is_admin');
Route::post('/bookings', 'BookingController@store')->middleware('auth');
Route::get('/bookings/{id}', 'BookingController@show')->middleware('auth');
Route::post('/bookings/{id}', 'BookingController@update')->middleware('auth');
Route::delete('/bookings/{id}', 'BookingController@destroy')->middleware('auth');
