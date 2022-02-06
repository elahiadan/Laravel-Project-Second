<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// calling Middleware by name which is defined in karnel file

Route::group(['middleware'=> ['auth','admin']], function(){
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('product', function () {
        return view('admin.product');
    });

    Route::get('adminuser','RoleController@index');
    Route::get('useredit/{id}','RoleController@edit');
    Route::get('userdelete/{id}','RoleController@destroy');


    Route::get('dashboard','ProductController@adan');
    Route::get('product','ProductController@index');
    Route::get('addproduct','ProductController@addproduct');
    Route::post('formsubmit','ProductController@store');
    Route::get('editproduct/{id}','ProductController@edit');
    Route::post('updateproduct','ProductController@update');
    route::get('proddelete/{id}', 'productController@destroy');
    
    
    Route::get('category','CategoryController@index');
    Route::get('addcategory','CategoryController@addcate');
    Route::post('submit_category','CategoryController@store');
    Route::get('addproduct','CategoryController@selectoption');
    Route::get('editcategory/{id}','CategoryController@edit');
    Route::post('updatecategory','CategoryController@update');
    route::get('catedelete/{id}', 'CategoryController@destroy');

    // Route::get('hello', function () {
    //     $users = \App\Product::all();
    //     return view('admin.hello',compact('users'));
    // });
});



