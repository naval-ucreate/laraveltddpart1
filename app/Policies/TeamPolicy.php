<?php

namespace App\Policies;

use App\Models\Users;
use App\team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the team.
     *
     * @param  \App\Models\Users  $user
     * @param  \App\team  $team
     * @return mixed
     */
    public function view(Users $user, team $team)
    {
        return $team->user_id==$user->id; 
    }

    /**
     * Determine whether the user can create teams.
     *
     * @param  \App\Models\Users  $user
     * @return mixed
     */
    public function create(Users $user)
    {
        //
    }

    /**
     * Determine whether the user can update the team.
     *
     * @param  \App\Models\Users  $user
     * @param  \App\team  $team
     * @return mixed
     */
    public function update(Users $user, team $team)
    {
        //
    }

    /**
     * Determine whether the user can delete the team.
     *
     * @param  \App\Models\Users  $user
     * @param  \App\team  $team
     * @return mixed
     */
    public function delete(Users $user, team $team)
    {
        //
    }

    /**
     * Determine whether the user can restore the team.
     *
     * @param  \App\Models\Users  $user
     * @param  \App\team  $team
     * @return mixed
     */
    public function restore(Users $user, team $team)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the team.
     *
     * @param  \App\Models\Users  $user
     * @param  \App\team  $team
     * @return mixed
     */
    public function forceDelete(Users $user, team $team)
    {
        //
    }
}
