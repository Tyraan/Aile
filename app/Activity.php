<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Activity extends Model(){
	
	public function center(){
		return $this->belongsTo('App\Center');
		
	}

}