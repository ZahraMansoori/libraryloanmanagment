<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     protected $table='user';

    protected $fillable = [
        'name','email','password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }
}
