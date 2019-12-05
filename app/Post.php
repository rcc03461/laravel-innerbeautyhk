<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'url',
        'title',
        'content'
    ];

    protected $guarded = array();
}
