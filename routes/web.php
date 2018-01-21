<?php

use App\Gear;
use App\Member;
use App\Trip;

Route::get('/', function () {
    $members = Member::all()->sortBy('created_at')->reverse()->take(6);
    $trip = Trip::all()->sortBy('start_date')->last();
    $trips = Trip::all()->sortBy(function ($trip) {
        $date_parts = explode('/', $trip->start_date);
        $val = ($date_parts[0] * 30);
        $val += $date_parts[1];
        $val += $date_parts[2] * 365;
        return $val;
    })->reverse();
    $trip = $trips->filter(function($trip){
        $date_parts = explode('/', $trip->start_date);
        $val = date('z', mktime(0,0,0,$date_parts[0],$date_parts[1],$date_parts[2]));
        $val += $date_parts[2] * 365;
        $current = (((int)date('Y') * 365) + (int)date('z'));
        return ($val > $current);
    })->last();
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
Route::patch('/members/has_paid/{id}', 'MemberController@update_has_paid');
Route::patch('/members/{id}', 'MemberController@update');
Route::get('/manage_eboard', 'MemberController@manage_eboard');
Route::get('/eboard', 'MemberController@eboard');
Route::get('/eboard_positions', 'MemberController@eboard_positions');
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
Route::get('/gallery', 'TripController@gallery');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@create');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');
Route::get('/logout', 'AuthController@destroy');

Route::get('/gear_rental', 'GearController@index');
Route::get('/manage_gear', 'GearController@manage');
Route::post('/manage_gear', 'GearController@store');

Route::get('/settings', 'SettingsController@index');

Route::view('/faqs', 'faqs');
