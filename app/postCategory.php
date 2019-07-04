<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postCategory extends Model
{
    public function category(){
        return $this->hasMany('App\post');
    }
}
