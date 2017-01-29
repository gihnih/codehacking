<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $imgpath = '/images/';

    protected $fillable = [
        'name'
    ];

    public function getNameAttribute($photo){
        return $this->imgpath . $photo;
    }
}
