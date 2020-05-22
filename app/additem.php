<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class additem extends Model
{
    protected $table = 'additems';
    protected $fillable = ['pro_id','itemcode','quantity'];
}
