<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //create relationship with category table
    // added category class at the top
    public function category(){
       return $this->belongsToMany('App\category');
    }
}
