<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Role;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->paginate('5');
        // $data = Product::simplepaginate('6');
        return view('admin.product',["data"=>$data]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new product;
        
        $data->prod_title=$_POST['title'];
        $data->prod_description=$_POST['description'];
        $data->price=$_POST['price'];
        $data->discount=$_POST['discount'];
        $data->discount_price=$_POST['discount_price'];

            $filename= sprintf('thumbnail_%s.jpg',random_int(1,1000));
                if($request->hasFile('thumbnail'))
                    $filename=$request->file('thumbnail')->storeAs('images', $filename, 'public');
        $data->thumbnail=$filename;
        
        $data->option=$_POST['option'];
        $data->user_id=Auth::user()->id; 
        $data->cate_id=$_POST['selectbox']; 
        $data->save();


        $id=$data->cate_id=$_POST['selectbox'];  // getting id of Category from the select box from the product form
        $data = Category::find($id);             // find the colomn in category table by using that id which come from product form 

        $count=$data->find($id)->count;          // find the exact value of count in digit
        $data->count=($count+1);                 // simple increament operation
        $data->save();


        $auth_user_id = Auth::User()->id;                 // find authenticated user id
        $data = User::find($auth_user_id);                // find the colomn in user table by using that id which come from authenticated user id

        $count=$data->find($auth_user_id)->tot_product;   // find the exact value of tot_product in digit
        $data->tot_product=($count+1);                    // simple increament operation
        $data->save();
        return redirect('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $data = Product::find($id);
        return view('admin.edit_product',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data = Product::find($req->input('id'));
        
        $data->prod_title=$_POST['title'];
        $data->prod_description=$_POST['description'];
        $data->price=$_POST['price'];
        $data->discount=$_POST['discount'];
        $data->discount_price=$_POST['discount_price'];
        $data->thumbnail=$_POST['thumbnail'];
        $data->option=$_POST['option'];
        $data->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {

        $data = Product::all();                       // first find all product and then

        $cateid = $data->find($id)->cate_id;            //find cate_id from product table and store in variable
        $category_id = $data->cate_id = $cateid;          // getting id of Category from the select box from the product form
        $data = Category::find($category_id);         // find the colomn in category table by using that id which come from product form 
        
        $count = $data->find($category_id)->count;      // find the exact value of count in digit
        $data->count = ($count-1);                      // simple increament operation
        
        $data->save();
      

        $data = Product::all();                             // first find all product and then

        $userid = $data->find($id)->user_id;                //find user_id from product table and store in variable
        $auth_user_id = $data->id = $userid;                // getting id of User by the user_id from the product table
        $data = User::find($auth_user_id);                  // find the colomn in user table by using that id which come from product table 
        $count = $data->find($auth_user_id)->tot_product;   // find the exact value of tot_product in digit
        $data->tot_product = ($count-1);                    // simple increament operation
        
        $data->save();

        Product::find($id)->delete();
        return redirect('product');
    }



    public function adan()
    {
        $data = Product::latest()->paginate('6');
        // $data = Product::simplepaginate('6');
        return view('admin.dashboard',["data"=>$data]);

    }



    public function addproduct(){
        return view('admin.addproduct');
    }

}