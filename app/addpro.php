<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addpro extends Model
{
    protected $table = 'addpros';
    protected $fillable = ['name','position','title','body'];
}
