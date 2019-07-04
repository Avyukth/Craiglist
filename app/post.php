<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=[
        'category_id','photo_id','body','title'
    ];

    public function user(){
        return $this->belongsTo( 'App\User','users_id');
    }


    public function photo(){
        return $this->belongsTo('App\Photo');
    }


    public function category(){
        return $this->belongsTo('App\postCategory','category_id');
    }
}
