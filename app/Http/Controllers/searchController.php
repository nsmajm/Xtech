<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
//        return $request;
            $product = Product::where('name','like',"%$request->search%")->get();
//            return $product;
//            return redirect()->route('product.viewSearchReslt',$product);
            return view('Website.search')->with('products',$product);
    }

}
