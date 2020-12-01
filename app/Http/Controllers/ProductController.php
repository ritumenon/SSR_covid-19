<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function prod_des($id){
        $product    = Product::find($id);
        return view('product.prod_des',compact('product'));
    }
}
