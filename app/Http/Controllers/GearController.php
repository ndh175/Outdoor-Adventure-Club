<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gear;

class GearController extends Controller
{
    public function __construct()
    {
        $this->middleware('moderator')->except('index');
    }

    public function index()
    {
        return view('gear_rental');
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
        $gear->item = request('item');
        $gear->item = request('item');
        $gear->item = request('item');
        $gear(save);

        return redirect('/manage_gear');
    }
}
