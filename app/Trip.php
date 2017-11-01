<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Member;

class Trip extends Model
{
    public function members()
    {
        return DB::table('trip_member')
            ->join('members', 'trip_member.member_id', '=', 'members.id')
            ->join('trips', 'trip_member.trip_id', '=', 'trips.id')
            ->where('trips.id', '=', $this->id)
            ->get();
    }
}
