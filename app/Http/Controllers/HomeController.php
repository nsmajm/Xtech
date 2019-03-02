<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\ProductSliderImage;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
////    {
////        $this->middleware('auth');
////    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminIndex()
    {
        return view('index');
    }

    public function homepage(){
        $product = Product::all();
        $productImage = ProductSliderImage::all();
        return view('Website.index')->with('products',$product)->with('productImages',$productImage);
    }
    public static function getSliderImage($id){

        if(count(ProductSliderImage::where('product_id',$id)->get())<=0){
            return "NULL";
        }
       else{
           $imagePath = ProductSliderImage::where('product_id',$id)->first()->image_path;
           return $imagePath;

       }
    }

}
