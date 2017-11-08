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
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function manage()
    {
        $members = Member::all()->orderBy('created_at', 'desc');
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
