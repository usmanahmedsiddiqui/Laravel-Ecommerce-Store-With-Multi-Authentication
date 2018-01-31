<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Admin;
class AdminLoginController extends Controller
{
public function getSignIn(){
        return view('admin.adminsignin');
    }

public function postSignIn(Request $request){

             $this->validate($request,[
                     'email' => 'email|required',
                     'password' => 'required|min:4'

              ]);

             if(Auth::guard('admin')->attempt(['email'=> $request->input('email'), 'password'=>$request->input('password')])){

              return redirect()->route('dashboard');
             }
             return redirect()->back();

    }




    public function getSignout(){
        Auth::guard('admin')->logout();
      return redirect()->route('adminsignin');
    }

}
