<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_meta extends Model
{
    //
    public $timestamps = false;




    public function meta()
    {
        return $this->belongsTo('App\Product');
    }
}
