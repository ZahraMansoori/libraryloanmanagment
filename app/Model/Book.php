<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table='book';
    protected $fillable=[
      'name','author','pub_year','pub_name','translator_name','category','price'
    ];
}
