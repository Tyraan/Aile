<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{	

	//table name
	protected $table = 'articles';
	
	//
	public function comments(){
		return $this->hasMany('App\Comment');		

	}


}
