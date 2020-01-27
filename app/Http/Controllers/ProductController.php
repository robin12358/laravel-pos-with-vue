<?php

namespace App\Http\Controllers;

use App\Productcategory;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
   public function productcategory(){
       return view('admin.product.product_categories');
   }
   public function addproductcategory(CategoryRequest $request){
   			$data= $request;
   			return $data;
   }
   public function product(){
       return view('admin.product.product');
   }
   public function productcategorydata(){
     $data =Productcategory::all();
     return $data;
   }
   public function store(ProductRequest $request){
    $exploded = explode(',',$request->image);
    $decode = base64_decode($exploded[1]);
    if(str_contains($exploded[0],'jpeg'))
    $extension ='jpg';
    else
    $extension = 'png';

    
    $name =str_random(). '.'.$extension;
    $path=public_path().'/'.$name;
 
    file_put_contents($path, $decode);
  
 
    $pb = new Product;
    $pb->product_name =$request->product_name;
    $pb->product_category = $request->product_category;
    $pb->company_name = $request->company_name;
    $pb->Measurement_method = $request->Measurement_method;
    $pb->minmum_quantity = $request->minmum_quantity;
    $pb->details = $request->details;
    $pb->image = $path;
    $pb->save();
    return "success";

   }
}
