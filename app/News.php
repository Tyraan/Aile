<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //table name
	protected $table ='news';

    public function center(){
        return $this->belongsToMany('Center' ,'center_news','id','center_id');
        
    }
}
