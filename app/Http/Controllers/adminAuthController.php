<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class adminAuthController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('admin.auth.login');
        }
        
    }

    public function login(Request $request){
        $validator =  Validator::make($request->all(),[
            'email' => 'required', 
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentails = $request->only('email', 'password');

        // var_dump($credentails);

        if(Auth::attempt($credentails)){
        //    return view('admin.dashboard');
           return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }

     

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
