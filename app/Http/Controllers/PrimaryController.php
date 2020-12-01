<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PrimaryController extends Controller
{
    public function index(){
        return view('primary.index');
    }

    public function products(){
        $products       = Product::paginate(1);
        return view('primary.products',compact('products'));
    }

    public function about(){
        return view('primary.about');
    }

    public function contact(){
        return view('primary.contact');
    }
}
