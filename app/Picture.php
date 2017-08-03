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
    public function news(){
        return $this->belongsTo(News::class);
    }
    /*
     * 在viwe 中使用，返回banner图的url
     */
    public function getUrl(){
        return '/image/banner/'.$this->location;
    }

}
