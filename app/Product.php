<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Product_meta;

class Product extends Model
{
    //

    protected $fillable = [
        'url',
        'excerpt',
        'title',
        'content',
        'price_origin',
        'price_selling',
    ];

    protected $guarded = array();

    public function meta(){
        return $this->hasMany('App\Product_meta');
    }



    public function files()
    {
        // return $this->morphMany(File::class, 'imageable');
        return $this->morphToMany('App\File', 'fileable');
        // return 123;
    }


}
