<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
  
    use HasApiTokens, Notifiable;
    protected $table = 'users';
}
