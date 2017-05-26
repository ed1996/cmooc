<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable = [
        'title', 'content', 'images', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
