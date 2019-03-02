<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductSpecition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecificationController extends Controller
{
  public function index(){
      return view('Admin.Specification.show');
  }
  /*
   * Get Data from Request
   * save it to the Specification list table
   * return next()
   */
  public function store(Request $request){
      $request->validate([
          'name' => 'required|unique:product_specitions',
      ]);
      $specification = new ProductSpecition();
      $specification->name = $request->name;
      $specification->save();
      return response()->json($specification);
  }


  /*
   * get All data from the specification table
   * return data to ajax function
   */

  public function getSpecificationData(Request $request){
        $specification = ProductSpecition::all();
        return response()->json($specification);
  }


}
