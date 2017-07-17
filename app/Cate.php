<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = "cates";
    protected $fillable = 
    [
    	'name','alias','menu_id'
    ];
    public function Menu()
    {
    	return $this->belongsTo('App\Menu','menu_id','id');
    }
}
