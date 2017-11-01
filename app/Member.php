<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    public function isAdmin()
    {
        return ($this->rank == 'admin');
    }

    public function isModerator()
    {
        return ($this->rank == 'moderator' || $this->rank == 'admin');
    }
}
