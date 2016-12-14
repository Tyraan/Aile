<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /*
     * Get all of the banner pictures
     */
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }



}
