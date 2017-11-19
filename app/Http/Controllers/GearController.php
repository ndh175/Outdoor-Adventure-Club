<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gear;
use App\Member;

class GearController extends Controller
{
    public function __construct()
    {
        $this->middleware('moderator')->except('index');
    }

    public function index()
    {
        $utensils = Member::whereIn('rank', 'user')->get();
        //$tents = Gear::whereIn('category', 'Tents')->get();
        return view('gear_rental', compact('utensils'));
    }

    public function manage()
    {
        return view('manage_gear');
    }

    public function store()
    {
        $this->validate(request(), [
            'item' => 'required',
            'quantity' => 'required',
            'category' => 'required'
        ]);

        $gear = new Gear();
        $gear->name = request()->item;
        $gear->total_avaiable = request()->quantity;
        $gear->current_avaiable = request()->quantity;
        $gear->category = request()->category;
        $gear->save();

        return redirect('/manage_gear');
    }
}
