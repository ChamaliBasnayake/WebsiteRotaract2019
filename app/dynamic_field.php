<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dynamic_field extends Model
{
    protected $table = 'dynamic_fields';
    protected $fillable = ['item','quantity1','quantity2','itemcode','pro_id'];
}
