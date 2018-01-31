<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use App\Order;
use Illuminate\Support\Facades\Route;
use App\User;
class AdminController extends Controller
{

  public function __construct(){
    $this->middleware('auth:admin');
  }
     




public function getDashboard(){
	return view('admin.dashboard');
}

public function getUser(){
   $admins = User::all();

        return view('admin.user',['admins' =>$admins]);

}
public function getOrder(){
   $orders = Order::all();

  return view('admin.order',['orders' =>$orders]);
}









}