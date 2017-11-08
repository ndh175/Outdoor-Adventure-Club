<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Trip;
use App\Member;

class TripController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('moderator')->except('index', 'register_trip', 'register_trip_link');
    }

    public function index()
    {
        $trips = Trip::all()->sortBy(function ($trip) {
            $date_parts = explode('/', $trip->start_date);
            $val = ($date_parts[0] * 30);
            $val += $date_parts[1];
            $val += $date_parts[2] * 365;
            return $val;
        })->reverse();
        $future_trips = $trips->filter(function($trip){
            $date_parts = explode('/', $trip->start_date);
            $val = ($date_parts[0] * 30);
            $val += $date_parts[1];
            $val += $date_parts[2] * 365;
            $current = (((int)date('Y') * 365) + (int)date('z'));
            return ($val > $current);
        })->get();
        $past_trips = $trips->filter(function($trip){
            $date_parts = explode('/', $trip->start_date);
            $val = ($date_parts[0] * 30);
            $val += $date_parts[1];
            $val += $date_parts[2] * 365;
            $current = ((int)(date('Y') * 365) + (int)date('z'));
            return ($val < $current);
        })->get();
        if (auth()->check()) {
            $user_trips = DB::table('trip_member')
                ->join('members', 'trip_member.member_id', '=', 'members.id')
                ->where('members.id', '=', auth()->user()->id)
                ->select('trip_id')
                ->get();
            return view('trips', compact('trips', 'future_trips', 'past_trips', 'user_trips'));
        }
        return view('trips', compact('trips', 'future_trips', 'past_trips'));
    }

    public function manage()
    {
        $trips = Trip::all()->sortBy('start_date')->reverse();
        return view('manage_trips', compact('trips'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required',
            'price' => 'required',
            'total_spots' => 'required',
            'image' => 'required',
            'is_attending' => 'required'
        ]);

        $trip = new Trip();
        $trip->name = request('name');
        $trip->start_date = request('start_date');
        $trip->end_date = request('end_date');
        $trip->location = request('location');
        $trip->price = request('price');
        $trip->total_spots = request('total_spots');
        $trip->remaining_spots = request('total_spots');
        $trip->image_url = request()->file('image')->store('public/images');
        $trip->save();

        if (strcasecmp('yes', request('is_attending')) == 0 || strcasecmp('y', request('is_attending')) == 0) {
            DB::table('trip_member')->insert([
                    'trip_id' => $trip->id,
                    'member_id' => auth()->user()->id
            ]);

            $trip->remaining_spots--;
            $trip->save();
        }

        return redirect('/trips');
    }

    public function delete($id)
    {
        Trip::find($id)->delete();
        return redirect('/manage_trips');
    }

    public function register_trip(Trip $trip)
    {
        return view('/register_trip', compact('trip'));
    }

    public function register_trip_link(Trip $trip)
    {
        DB::table('trip_member')->insert([
                'trip_id' => $trip->id,
                'member_id' => auth()->user()->id
        ]);

        $trip->remaining_spots--;
        $trip->save();

        return redirect('/trips');
    }

    public function delete_trip_link(Trip $trip, Member $member)
    {
        DB::table('trip_member')
            ->where('trip_id', '=', $trip->id)
            ->where('member_id', '=', $member->id)
            ->delete();

        $trip->remaining_spots++;
        $trip->save();

        return redirect('/manage_trips');
    }

    public function update()
    {
        $trip = Trip::where('name', '=', request()->trip_selector)->first();

        if (request()->name != null) {
            $trip->name = request()->name;
        }
        if (request()->location != null) {
            $trip->location = request()->location;
        }
        if (request()->price != null) {
            $trip->price = request()->price;
        }
        if (request()->start_date != null) {
            $trip->start_date = request()->start_date;
        }
        if (request()->end_date != null) {
            $trip->end_date = request()->end_date;
        }
        if (request()->total_spots != null) {
            $trip->remaining_spots = (request()->total_spots - ($trip->total_spots - $trip->remaining_spots));
            $trip->total_spots = request()->total_spots;
        }
        if (request()->image != null) {
            $trip->image_url = request()->file('image')->store('public/images');
        }

        $trip->save();

        return redirect('/trips');
    }
}
