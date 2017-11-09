<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('moderator')->except('index');
        $this->middleware('admin')->except('index', 'manage', 'update_has_paid');
    }

    public function index()
    {
        $members = Member::all()->sortBy('created_at');
        return view('members', compact('members'));
    }

    public function manage()
    {
        $members = Member::all()->sortBy('name');
        return view('manage_members', compact('members'));
    }

    public function manage_eboard()
    {
        $members = Member::whereIn('rank', ['moderator', 'user'])->get();
        return view('manage_eboard', compact('members'));
    }

    public function update_has_paid($id)
    {
        $member = Member::find($id);
        $member->has_paid = !$member->has_paid;
        $member->save();
        return redirect('/manage_members');
    }

    public function update($id)
    {
        $member = Member::find($id);

        if (request()->name != null) {
            $member->name = request()->name;
        }
        if (request()->password != null) {
            $member->password = bcrypt(request('password'));
        }
        if (request()->image != null) {
            $member->image_url = request()->file('image')->store('public/profile_pics');
        }
        if (request()->bio != null) {
            $member->bio = request()->bio;
        }

        $member->save();

        return redirect('/members');
    }

    public function update_title($id)
    {
        $member = Member::find($id);
        $member->title = request()->title;
        $member->save();
        return redirect('/manage_eboard');
    }

    public function update_rank($id)
    {
        $member = Member::find($id);
        if ($member->rank == 'moderator') {
            $member->rank = 'user';
        } elseif ($member->rank == 'user') {
            $member->rank = 'moderator';
        }
        $member->save();
        return redirect('/manage_eboard');
    }
}
