<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //table name
	protected $table = 'center';	
	

	public function news(){
		return $this->hasMany('App\News');		

	}

	public function faculties(){
		return $this->hasMany('App\Faculty');

	}
}
