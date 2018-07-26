<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function images()
    {
        return $this->hasMany('App\Image');
    }
    
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
}
