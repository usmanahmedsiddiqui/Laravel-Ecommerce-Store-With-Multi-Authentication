<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
     public function getSignUp(){
        return view('admin.adminsignup');
    }

    public function postSignUp(Request $request){
    	$this->validate($request,[
              'email' => 'email|required|unique:admins',
              'password' => 'required|min:4'
    		]);

    	$admin = new Admin([

               'email' => $request->input('email'),
               'password' => bcrypt($request->input('password'))

    		]);
    	$admin->save();
    	return redirect()->route('dashboard');
      // Auth::login($user);

}


public function getSignIn(){
        return view('admin.adminsignin');
    }





public function postSignIn(Request $request){

             $this->validate($request,[
                     'email' => 'email|required',
                     'password' => 'required|min:4'

              ]);

             if(Auth::attempt(['email'=> $request->input('email'), 'password'=>$request->input('password')])){

              return redirect()->route('dashboard');
             }
             return redirect()->back();

    }





public function getDashboard(){
	return view('admin.dashboard');
}
}
