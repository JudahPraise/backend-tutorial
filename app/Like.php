<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['post_id','likeBy'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
