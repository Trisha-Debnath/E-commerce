<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regForm(){
        return view('auth.reg');
    }
    public function login(){
        return view('auth.login');
    }
    public function regFormSubmit(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password)

        ]);
        return back();
    }
    public function loginsubmit(Request $request){
       $credentials=$request->except('_token');
       $authentication=auth()->attempt($credentials);
       if($authentication){
        return to_route('makeup');
       }
       else{
        return to_route('regForm');
       }
    }
     
    public function logout(){
        auth()->logout();
        return to_route('login');
    }
}
