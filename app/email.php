<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    protected $fillable = ['name','email','message'];
}
