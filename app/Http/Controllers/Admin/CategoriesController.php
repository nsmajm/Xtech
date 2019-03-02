<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catgory = Category::all();
        return view('Admin.Categories.show')->with('category',$catgory);
    }

    /**
     * return the edit form with id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $category = Category::findOrFail($request->id);
        return view('Admin.Categories.edit')->with('category',$category);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'c_name' => 'required|unique:categories',
        ]);
       $category = Category::where('c_Name',$request->c_name)->first();
       if($category){
           return response()->json(["message"=>"Category Already Exists"]);
       }
       else{
          $category = new Category();
          $category->c_name = $request->c_name;
          $category->c_type = $request->c_type;
          $category->save();
          return response()->json(["message"=>"Category Saved SuccessFully"]);
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        return $request;
//        $request->validate([
//            'c_name' => 'required|unique:categories',
//        ]);
        $category = Category::FindOrFail($request->id);
        $category->c_name = $request->c_name;
        $category->c_type = $request->c_type;
        $category->save();
        return response()->json(['message'=>'category Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Request id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->id)->delete();
        return response()->json(['message'=>'category Deleted']);
    }
}
