<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
class CartController extends Controller
{
    public function get_add_to_cart($id){
        $product = Product::find($id);
        $user = Auth::id();
        $cart = Cart::where('userid','=',$user)->first();
        $cart_items = unserialize($cart['cart']);
        $cart_items[$product->id] = 1;
        $update_cart = serialize($cart_items) ;
        $cart->cart= $update_cart;
        $cart->save(); 
        return redirect('cart');  }

     public function get_cart(){
        $user = Auth::id();
        $cart = Cart::where('userid','=',$user)->first();
        $cart_items = unserialize($cart['cart']);
        $product = Product::whereIn('id', array_keys($cart_items))->get();
        $sub_total=0;
        foreach($product as $prod){
        $sub_total = $sub_total+ $prod->price;}
        $total= $sub_total+ 10;
        return view('primary.cart',compact('product','sub_total','total'));
         
     }   

     public function delete_item($id){
        $product = Product::find($id);
        $user = Auth::id();
        $cart = Cart::where('userid','=',$user)->first();
        $cart_items = unserialize($cart['cart']);
        unset($cart_items[$product->id]);
        $update_cart = serialize($cart_items) ;
        $cart->cart= $update_cart;
        $cart->save(); 
        return redirect('cart'); 
     }
}
