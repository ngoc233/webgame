<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cate;

class Post extends Model
{
    protected $table ="posts";

    protected $fillable =
    [
    	'name','alias','description','content','image','title','cate_id','is_active'
    ];
    public function Cate()
    {
    	return $this->belongsTo('App\Cate','cate_id','id');
    }
}
