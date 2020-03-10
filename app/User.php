<?php

namespace App;

use App\Model\book;
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

    public function Books()
    {
        return $this->belongsToMany(Book::class,book_user);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }
}
