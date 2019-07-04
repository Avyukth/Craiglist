<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postCategory extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'category_type'
    ];
    public function category(){
        return $this->hasMany('App\post');
    }
}
