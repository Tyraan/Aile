<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;


class Picture extends Model
{
    //
    protected $fillable = ['location','thumbnail','link'];
    /*
     * get the banner that owns the picture
     */
    public function banner(){
        return $this->belongsTo(Banner::class);
    }
    public function getUrl(){
        return '/image/banner/'.$this->location;

    }
}
