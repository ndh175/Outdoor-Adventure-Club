<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
