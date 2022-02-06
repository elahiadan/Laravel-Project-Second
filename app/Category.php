<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Role;

class Category extends Model
{
    //create relationship with product table
    public function product(){
        return $this->belongsToMany('App\Product');
    }

     //create relationship with category_product table
    public function childrens(){
        return $this->belongsToMany(category::class,'category_parent','category_id','parent_id');
    }

    // public function role()
    // {
    //     return $this->hasMany('App\Role'); // role belongs to this user 
    // }
}
