<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'title', 'content', 'images', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
