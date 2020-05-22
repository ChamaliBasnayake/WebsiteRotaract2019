<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donordetail extends Model
{
    protected $table = 'donordetails';
    protected $fillable = ['name','phone','email','pro_id'];
}
