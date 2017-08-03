<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //table name
	protected $table ='news';


    public function center(){
        return $this->belongsToMany('App\Center');
        
    }
    public function pictures(){
        return $this->hasMany('App\Picture');
    }
}
