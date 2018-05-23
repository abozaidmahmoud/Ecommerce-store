<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;


class Product extends Model{
    public function category(){
        return $this->belongsToMany(Pcategory::class);
    }


    public function alsoMightLike(){
        return Product::inRandomOrder()->take(6);
    }

     


}
