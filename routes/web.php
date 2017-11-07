<?php

use App\Gear;
use App\Member;
use App\Trip;

Route::get('/', function () {
    $members = Member::all()->reverse()->take(6);
    $trip = Trip::all()->sortBy('start_date')->last();
    if (auth()->check()) {
        $user_trips = DB::table('trip_member')
            ->join('members', 'trip_member.member_id', '=', 'members.id')
            ->where('members.id', '=', auth()->user()->id)
            ->select('trip_id')
            ->get();
        return view('index', compact('members', 'trip', 'user_trips'));
    }
    return view('index', compact('members', 'trip'));
});

Route::redirect('/home', '/')->name('home');

Route::get('/members', 'MemberController@index');
Route::get('/manage_members', 'MemberController@manage');
Route::patch('/members/{id}', 'MemberController@update_has_paid');
Route::get('/manage_eboard', 'MemberController@manage_eboard');
Route::patch('/manage_members/rank/{id}', 'MemberController@update_rank');
Route::patch('/manage_members/title/{id}', 'MemberController@update_title');

Route::get('/trips', 'TripController@index');
Route::post('/trips', 'TripController@store');
Route::delete('/trips/{id}', 'TripController@delete');
Route::get('/manage_trips', 'TripController@manage');
Route::get('/register_trip/{trip}', 'TripController@register_trip');
Route::post('/register_trip/{trip}', 'TripController@register_trip_link');
Route::delete('/register_trip/{trip}/{member}', 'TripController@delete_trip_link');
Route::patch('/trips', 'TripController@update');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@create');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');
Route::get('/logout', 'AuthController@destroy');

Route::get('/gear_rental', 'GearController@index');
Route::get('/manage_gear', 'GearController@manage');

Route::get('/settings', 'SettingsController@index');

Route::view('/faqs', 'faqs');
