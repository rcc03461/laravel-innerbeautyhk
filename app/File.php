<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = "file";

    protected $fillable = [
        "name",
        "desc",
        "size",
        "ext",
        "path"
    ];

    // public function imageable()
    // {
    //     return $this->morphTo();
    // }

    public function products()
    {
        return $this->morphedByMany('App\Product', 'fileable');
    }



}
