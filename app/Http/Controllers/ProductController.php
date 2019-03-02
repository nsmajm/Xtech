<?php

namespace App\Http\Controllers;

use App\Model\FaqModel;
use App\Model\FilesModel;
use App\Model\Product;
use App\Model\ProductSliderImage;
use App\Model\ProductSpecList;
use App\Model\ProductTabImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct($id){
        $product = Product::findOrFail($id);
        $productSliderImage = ProductSliderImage::where('product_id',$id)->get();
        $productTabImage = ProductTabImage::where('product_id',$id)->get();
        $productSpecList = ProductSpecList::where('product_id',$id)->get();
        $files = FilesModel::where('product_id',$id)->get();
        $productFaq = FaqModel::where('product_id',$id)->get();
        return view('website.singleProduct')->with('product',$product)
            ->with('productSlider',$productSliderImage)
            ->with('tabImage',$productTabImage)
            ->with('specList',$productSpecList)
            ->with('faqLists',$productFaq)
            ->with('fileLists',$files);
    }

    public function productByCategory($categoryType){
        $product = Product::where('c_name',$categoryType)->paginate(12);
        $productCount = Product::where('c_name',$categoryType)->count();
        return view('Website.productGallery')->with('products',$product)->with('productCount',$productCount)->with('catName',$categoryType);
    }

}
