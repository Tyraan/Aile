<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //

    /*
     * get the banner that owns the picture
     */
    public function banner(){
        return $this->belongsTo(Banner::class);
    }
}