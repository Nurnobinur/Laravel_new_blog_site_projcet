<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\user\User;
use Illuminate\Http\Request;
use Illuminate\Routing\PendingResourceRegistration;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("adduser.adduser");
    }
    public function userstoredata(RegisterRequest $registerdata){
        $userdata=new User();
        $userdata->name=$registerdata->name;
        $userdata->email=$registerdata->email;
        $userdata->password=Hash::make($registerdata->password);
        $userdata->address=$registerdata->address;
        $userdata->phone=$registerdata->phone;
        $userdata->save();
        return back()->with("content","User Created Successfully!");

    }
}
