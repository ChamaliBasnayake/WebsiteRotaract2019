<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pro extends Model
{
     protected $table = 'pros';
    protected $fillable = ['title','body','image'];
}
