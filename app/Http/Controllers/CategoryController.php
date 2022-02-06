<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::latest()->paginate('5');
        dd($data);
        return view('admin.category',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new category;
        
        $data->cate_title=$_POST['cate_title'];
        $data->cate_description=$_POST['cate_description'];
        $data->user_id=Auth::user()->id; 
        $data->save();



        $auth_user_id = Auth::User()->id;                   // find authenticated user id
        $data = User::find($auth_user_id);                  // find the colomn in user table by using that id which come from authenticated user id

        $count=$data->find($auth_user_id)->tot_category;    // find the exact value of tot_category in digit
        $data->tot_category=($count+1);                     // simple increament operation
        $data->save();


        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category, $id)
    {
        $data = Category::find($id);
        return view('admin.edit_category',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data = Category::find($req->input('id'));

        $data->cate_title=$_POST['cate_title'];
        $data->cate_description=$_POST['cate_description'];
        
        $data->save();

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {

        $data = Category::all();                              // first find all Categories and then

        $userid = $data->find($id)->user_id;                  //find user_id from category table and store in variable
        $auth_user_id = $data->id = $userid;                  // getting id of user by user_id in the category table
        $data = User::find($auth_user_id);                    // find the colomn in user table by using that id which come from category table
        $count = $data->find($auth_user_id)->tot_category;    // find the exact value of tot_category in digit
        $data->tot_category = ($count-1);                     // simple decreament operation
        
        $data->save();

        Category::find($id)->delete();
        return redirect('category');

    }


    public function addcate(){
        return view('admin.addcategory');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectoption()
    {
        //
        $data = category::all();
        return view('admin.addproduct',["data"=>$data]);
    }

    public function selectforedit()
    {
        //
        $data = category::all();
        return view('admin.edit_product',["data"=>$data]);
    }


}
