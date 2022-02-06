<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes; // For delete
use App\User; //for joining the table
use App\Category;//for joining the table

class Role extends Model
{
    // //
    // use softDeletes; //calling delete method
    // protected $guarded= []; //we used guarded = araay for multiple colunm instead of fillable 
    // protected $date = ['deleted_at'];  // save the date of delete



    // here i am joining the Role table with User Table
    // User class added at the top
    public function users()
    {
        return $this->hasMany('App\User'); // one role belongs to many users 
    }

//     public function categories()
//     {
//         return $this->hasMany('App\Category'); // role belongs to this user 
//     }
}
