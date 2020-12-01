<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterForm;
use Auth;
use App\Models\User;
use App\Models\Cart;

class AccountController extends Controller
{
    public function get_account(){
        return view('primary.registration');    //get request for common login/register
    }

    public function post_login(LoginForm $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password])){  //left field col_name in db
         return redirect('/');
        }
        else 
        {    
            $message='Entered credentials are invalid'; 
            return $message;}
            //return redirect('',compact('message')); } // in case of invalid data, we redirect to this page ; 
    }

    public function post_register(RegisterForm $request){
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        
        $newUser = User::create(['email'=>$email,'password'=>PASSWORD_HASH($password,PASSWORD_BCRYPT),'name'=>$name,'mobile_no'=>$request->input('contact')]);
        //Order::create()
        Cart::create(['userid'=>$newUser->id,'cart'=>serialize([])]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
