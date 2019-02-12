<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','user_id'];

    public function getPlayer()
    {
        return $this->hasMany('App\Models\Player');
    }
}
