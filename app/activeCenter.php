<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activeCenter extends Model
{	
	// 对应表名称
    protected $table = 'activeCenter';


    public function activities()
    {

    	return $this->hasMany('App\activities','id','id');

    }
}
