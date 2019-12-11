<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $fillable = [
        "hash",
        "payby",
        "name",
        "email",
        "tel",
        "address",
        "total",
        // "ip",
        // "bowser",
    ];


    public function products()
    {
        return $this->belongsToMany('App\Product')
            ->withPivot('price_sold')
            ->withPivot('qty')
            ->withTimestamps();
    }

}
