<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //table name
	protected $table = 'center';
	protected $fillable = ['name','intro','supervisor'];	

	public function news(){
		return $this->belongsToMany('App\News');		

	}

	public function faculties(){
		return $this->hasMany('App\Faculty');

	}
}
