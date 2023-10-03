<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginuser(){
        return view("login.login");
    }
    public function loginstoredata(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:6"
        ]);
        $loginstoredta=$request->only(["email","password"]);
        if(Auth::attempt($loginstoredta)){
            return redirect()->route("dashbord");
        }else{
            return back()->with("message","Email and Password Don't Match!");
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }
}
