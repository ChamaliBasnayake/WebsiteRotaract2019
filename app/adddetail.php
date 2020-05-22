<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adddetail extends Model
{
    protected $table = 'adddetails';
    protected $fillable = ['title','body','pro_id','coor','phone'];
}
