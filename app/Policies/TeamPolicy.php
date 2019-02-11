<?php

namespace App\Policies;

use App\Models\Users;
use App\team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    public function view(Users $user, team $team)
    {
        return $team->user_id==$user->id; 
    }

}
