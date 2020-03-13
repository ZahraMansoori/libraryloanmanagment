<?php

namespace App\Model;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table='book';
    protected $fillable=[
      'name','author','pub_year','pub_name','translator_name','category','num'
    ];

    public function Users()
    {
        return $this->belongsToMany(User::class,'book_user');
  }
}
