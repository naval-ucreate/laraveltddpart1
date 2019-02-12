<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['team_id','name','email'];
    public function getTeam()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
