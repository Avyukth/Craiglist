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

//    public static function boot() {
//        parent::boot();
//
//        static::deleting(function($id) { // before delete() method call this
//            dd($id->posts);
//            // do the rest of the cleanup...
//        });
//    }
}
