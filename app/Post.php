<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'title', 'content', 'formation_id', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function formation(){
        return $this->belongsTo('App\Formation');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
