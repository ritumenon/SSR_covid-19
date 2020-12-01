<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use PaytmWallet;
use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class OrderController extends Controller
{
    public function get_order(){
        $user = Auth::id();
        $cart = Cart::where('userid','=',$user)->first();
        $order = new Order;
        $order->userid = $user;
        $order->cart = $cart['cart'];
        $order->save();
        $user = Auth::user();
        $cart_items = unserialize($cart['cart']);
        $product = Product::whereIn('id', array_keys($cart_items))->get();
        $sub_total=0;
        foreach($product as $prod){
        $sub_total = $sub_total+ $prod->price;}
        $total= $sub_total+ 10;
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $order->id + 1000,
          'user' => $user->id,
          'mobile_number' => 1234567890,
          'email' => $user->email,
          'amount' => $total,
          'callback_url' => 'http://localhost:8000/payment/status'
        ]);
        return $payment->receive();
    }
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        $newTransaction =   Transaction::create(['order_id'=>$response['ORDERID']-1000,'txnid'=>$response['TXNID'],'txnamount'=>$response['TXNAMOUNT'],'banktxnid'=>$response['BANKTXNID'],'txndate'=>$response['TXNDATE'],'status'=>$response['STATUS'],'bankname'=>$response['BANKNAME'],'gatewayname'=>$response['GATEWAYNAME']]);

        if($transaction->isSuccessful()){
            $user = Auth::id();
            $cart = Cart::where('userid','=',$user)->first();
            $cart->cart = serialize([]);
            $cart->save();
            

        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
        return $response;
    }    
}
