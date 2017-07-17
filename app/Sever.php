<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sever extends Model
{
    protected $table = "severs";
    protected $fillable = 
    [
    	'name','title'
    ];

}
