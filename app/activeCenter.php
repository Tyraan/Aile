<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activeCenter extends Model
{
    
    public function activities()
    {

    	return $this->hasMany('App\activities','activities_id','id');

    }
}
