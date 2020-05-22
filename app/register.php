<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
class register extends Model implements Authenticatable 
{
    use \Illuminate\Auth\Authenticatable ;
      protected $fillable = ['firstname','lastname','email','username','password',];
}
