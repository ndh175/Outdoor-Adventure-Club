<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:members',
            'password' => 'required|confirmed|string|min:6',
            'password_confirmation' => 'required',
            'image' => 'required'
        ]);

        $member = new Member();

        $member->name = request('name');
        $member->email = request('email');
        $member->password = bcrypt(request('password'));
        $member->image_url = request()->file('image')->store('public/profile_pics');
        $member->joined_date =  'Joined ' . date('F d, Y');
        $member->rank = 'user';
        $member->title = 'Member';
        $member->save();

        auth()->login($member);

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }

    public function create()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Invalid credentials.'
            ]);
        }

        return redirect('/');
    }
}
