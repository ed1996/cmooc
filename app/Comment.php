<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title','content', 'post_id', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
