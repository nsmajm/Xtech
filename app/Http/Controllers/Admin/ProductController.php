<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\FaqModel;
use App\Model\FilesModel;
use App\Model\Product;
use App\Model\ProductSliderImage;
use App\Model\ProductSpecition;
use App\Model\ProductSpecList;
use App\Model\ProductTabImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    /*
     * return the product create form
     * view found in (Admin.product.create)
     */
    public function show(){
        $product = Product::all();
        return view('Admin.Product.show')->with('products',$product);
    }

    public function create(){
        $category = Category::all();
        return view('Admin.product.create')->with('categories',$category);
    }
    /*
     * get data from request
     * store it in product table and
     * return
     */

    public function store(Request $request){
        /*
         * create new Product
         */

       $product = new Product();
       $product->name = $request->p_name;
       $product->subName = $request->subName;
       $product->description = $request->p_description;
       $product->c_name = $request->c_type;
       $product->save();

        /*
         * if Product Has Slider Image from Request
         * take it as an array
         * spilt the array
         * then save it to databse
         */
        if($request->hasfile('productSlider'))
        {
            foreach($request->file('productSlider') as $image)
            {
                    $name=$product->id.'-'. rand(1000, 9999) . '.' .$image->getClientOriginalName();
                   $image->move(public_path().'/Images/ProductSlider', $name);
                   $sliderImage = new ProductSliderImage();
                   $sliderImage->product_id =  $product->id;
                   $sliderImage->image_path ='/Images/ProductSlider/'.$name;
                   $sliderImage->save();
            }
        }
        /*
         * if Product Has Tab  Image
         * take it as an array  from Request
         * spilt the array
         * then save it to databse
         */
        if($request->hasfile('productTabImage'))
        {
            foreach($request->file('productTabImage') as $image)
            {
                $name=$product->id.'-'. rand(1000, 9999) . '.' .$image->getClientOriginalName();
                $image->move(public_path().'/Images/ProductTab', $name);
                $sliderImage = new ProductTabImage();
                $sliderImage->product_id =  $product->id;
                $sliderImage->image_path ='/Images/ProductTab/'.$name;
                $sliderImage->save();
            }
        }
        return redirect()->route('product.create.next',$product->id);
    }
        /*
         *parameter id
         * check in database
         * return product id in createNext View
         *
        */
    public function createNext($id){
        $product = Product::findOrfail($id);

        return view('Admin.Product.createNext')->with('product',$product);
    }
    /*
     * get Data from create next view
     * store it in productSpeclist table
     * return to the show product page
     */

    public function storeNext(Request $request){
        $total =  count($request->specificationId);
        for ($i=0;$i<$total;$i++){
            $product = new ProductSpecList();
            $product->product_id = $request->productSpecId;
            $product->spec_name = $request->specificationId[$i];
            $product->spec_value = $request->SpecificationValue[$i];
            $product->save();
        }
        return redirect()->route('product.specification.create',$product->product_id);

    }
    public function createSpecification($id){

        return view('Admin.Product.createNextSpecification')->with('productId',$id);
    }

    public function specificationStore(Request $request){
        $totalFaq = count($request->faqQuestion);
        for ($i=0;$i<$totalFaq;$i++){
            $productFaq = new FaqModel();
            $productFaq->product_id = $request->productId;
            $productFaq->faq_question = $request->faqQuestion[$i];
            $productFaq->faq_answer = $request->faqAnswer[$i];
            $productFaq->save();
        }
        return redirect()->route('product.add.files',$request->productId);
}

/*
 * get id as parameter
 * check it is available in database
 * delete it from database
 * delete photo and slider in the public/images/productslider and public/image/producttab folder according to the product name
 */
public function destroy(Request $request){
    $product = Product::findOrFail($request->id)->delete();
    $spec = ProductSpecList::where('product_id',$request->id)->delete();
    $faq = FaqModel::where('product_id',$request->id)->delete();
    $sliderImage = ProductSliderImage::where('product_id',$request->id)->get();

    foreach ($sliderImage as $singleSlide){
        $path = 'public'.$singleSlide->image_path;
        if (File::exists($path)){
            ProductSliderImage::where('product_id',$request->id)->delete();
            unlink($path);
        }
    }
    $tabImages = ProductTabImage::where('product_id',$request->id)->get();
    foreach ($tabImages as $tabImage){
        $path = 'public'.$tabImage->image_path;
        if (File::exists($path)){
            ProductTabImage::where('product_id',$request->id)->delete();
            unlink($path);
        }
    }
    return "done";
}

/*
 * show edit product page
 * takes id as parameter
 * compare with this model
 * return value to the field
 */
public function editProduct($id){
            $product = Product::findOrfail($id);
            $slideImage = ProductSliderImage::where('product_id',$id)->get();
            $tabimage = ProductTabImage::where('product_id',$id)->get();
            return view('Admin.Product.edit.editProduct')->with('product',$product)
                ->with('slideImages',$slideImage)->with('tabImages',$tabimage);
}
    /*
     * Takes id as Parameter
     * send ajax request to specific product Slider image
     * find the id
     * unlink the image from the storage
     */
    public function deleteSlideImage(Request $request){
//    return $request;
        $slideImage = ProductSliderImage::where('id',$request->id)->first();
        $path = 'public'.$slideImage->image_path;
        if (File::exists($path)){
            ProductSliderImage::where('id',$request->id)->delete();
            unlink($path);
        }
        return "success";

    }
    /*
     * Takes id as Parameter
     * send ajax request to specific product tab image
     * find the id
     * unlink the image from the storage
     */
    public function deleteTabImage(Request $request){
//    return $request;
        $slideImage = ProductTabImage::where('id',$request->id)->first();
        $path = 'public'.$slideImage->image_path;
        if (File::exists($path)){
            ProductTabImage::where('id',$request->id)->delete();
            unlink($path);
        }
        return "success";

    }
/*
 * takes id from request
 * takes field value
 * then update it
 */
public function update(Request $request){
    $product = Product::findOrFail($request->productId);
    $product->name = $request->p_name;
    $product->subName = $request->subName;
    $product->description = $request->p_description;
    $product->c_name = $request->c_type;
    $product->save();
    /*
       * if Product Has Slider Image from Request
       * take it as an array
       * spilt the array
       * then save it to databse
       */
    if($request->hasfile('productSlider'))
    {
        foreach($request->file('productSlider') as $image)
        {
            $name=$request->productId.'-'. rand(1000, 9999) . '.' .$image->getClientOriginalName();
            $image->move(public_path().'/Images/ProductSlider', $name);
            $sliderImage = new ProductSliderImage();
            $sliderImage->product_id =  $request->productId;
            $sliderImage->image_path ='/Images/ProductSlider/'.$name;
            $sliderImage->save();
        }
    }
    /*
     * if Product Has Tab  Image
     * take it as an array  from Request
     * spilt the array
     * then save it to databse
     */
    if($request->hasfile('productTabImage'))
    {
        foreach($request->file('productTabImage') as $image)
        {
            $name=$product->id.'-'. rand(1000, 9999) . '.' .$image->getClientOriginalName();
            $image->move(public_path().'/Images/ProductTab', $name);
            $sliderImage = new ProductTabImage();
            $sliderImage->product_id =  $product->id;
            $sliderImage->image_path ='/Images/ProductTab/'.$name;
            $sliderImage->save();
        }
    }
return redirect()->route('product.edit.next',[$request->productId]);
}

/*
 * takes id as parameter
 * return the id to the next view
 */
public function editProductNext($id){
    $specification = ProductSpecList::where('product_id',$id)->get();
    $specListI = ProductSpecition::all();
    return view('Admin.Product.edit.editNext')->with('specId',$specification)->with('productSpec',$specListI)->with('productId',$id);
}
/*
 * take id form request
 * delete it from database on that product id
 * then store new value in the database
 */

public function updateNext(Request $request){
    $list = ProductSpecList::where('product_id',$request->productId)->delete();
    $total =  count($request->specificationId);
    for ($i=0;$i<$total;$i++){
        $product = new ProductSpecList();
        $product->product_id  = $request->productId;
        $product->spec_name = $request->specificationId[$i];
        $product->spec_value = $request->SpecificationValue[$i];
        $product->save();
    }
return redirect()->route('product.faq.next',[$request->productId]);

}

/*
 * delete specific Specification
 * get id and send post ajax request
 * delete it from database
 */
public function deleteSingleSpecification(Request $request){
        ProductSpecList::findOrFail($request->id)->delete();
        return response()->json("Specification deleted Successfully");
        }


public function editNextSpecification($id){
        $faq = FaqModel::where('product_id',$id)->get();
        return view('Admin.Product.edit.editNextSpec')->with('faqLists',$faq)->with('productId',$id);
}

public function updateFaq(Request $request){
        FaqModel::where('product_id',$request->product_id)->delete();
        $totalFaq = count($request->faqQuestion);
        for ($i=0;$i<$totalFaq;$i++){
            $productFaq = new FaqModel();
            $productFaq->product_id = $request->product_id;
            $productFaq->faq_question = $request->faqQuestion[$i];
            $productFaq->faq_answer = $request->faqAnswer[$i];
            $productFaq->save();
        }
        return redirect()->route('product.add.files',[$request->product_id]);

}
/*
 * this takes id from the request
 * then find it on database
 * and delete it
 */
public function deleteSingleFaq(Request $request){
    FaqModel::findOrFail($request->id)->delete();
    return response()->json("Faq deleted Successfully");
}

public function createFilesDownload($id){
    return view('Admin.Product.createProductDownload')->with('productId',$id);
}

public function storeFiles(Request $request){
//        return count($request->addFiles);
        for ($i=0;$i<count($request->addFiles);$i++)
        {
            $name=$request->productId.'-'. rand(1000, 9999) . '.' .$request->addFiles[$i]->getClientOriginalName();
            $request->addFiles[$i]->move(public_path().'/Files/', $name);
            $filesModel = new FilesModel();
            $filesModel->product_id =  $request->productId;
            $filesModel->files_name =  $request->filesName[$i];
            $filesModel->file_path ='/Files/'.$name;
            $filesModel->file_type =$request->filesType[$i];
            $filesModel->save();
        }
        return redirect()->route('product.show')->with(["message"=>"Product uploaded Successfully"]);
}

}
