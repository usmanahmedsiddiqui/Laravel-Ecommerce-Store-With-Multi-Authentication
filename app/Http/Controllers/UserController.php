<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Session;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Order;
use App\Contact;
class UserController extends Controller
{
    public function getSignUp(){
        return view('user.signup');
    }

    public function postSignUp(Request $request){
    	$this->validate($request,[
              'email' => 'email|required|unique:users',
              'password' => 'required|min:4',
              'address' => 'required',
              'phone' => 'required',
              'fname'=>'required',
              'lname' => 'required'
    		]);

    	$user = new User([

               'email' => $request->input('email'),
               'password' => bcrypt($request->input('password')),
               'address' => $request->input('address'),
               'phone' => $request->input('phone'),
               'fname' => $request->input('fname'),
               'lname' => $request->input('lname')

    		]);
    	$user->save();
      Auth::login($user);

       if(Session::has('OldUrl')){
                $OldUrl = Session::get('OldUrl');
                Session::forget('OldUrl');
                return redirect()->to($OldUrl);
              }



    	return redirect()->route('user.profile');
        
    }


    public function getSignIn(){
      return view('user.signin');
    }
    public function postSignIn(Request $request){

             $this->validate($request,[
                     'email' => 'email|required',
                     'password' => 'required|min:4'

              ]);

             if(Auth::attempt(['email'=> $request->input('email'), 'password'=>$request->input('password')])){

              if(Session::has('OldUrl')){
                $OldUrl = Session::get('OldUrl');
                Session::forget('OldUrl');
                return redirect()->to($OldUrl);
              }
              return redirect()->route('user.profile');
             }

             return redirect()->back()->withInput()->with('message','Login Failed');

    }




     public function getProfile(){
       $fname = Auth::user()->fname;
       $lname = Auth::user()->lname;
       $address = Auth::user()->address;
       $phone = Auth::user()->phone;
       $email = Auth::user()->email;


       
       $orders = Auth::user()->orders;
       $orders -> transform(function($order,$key){
       $order->cart = unserialize($order->cart);
         return $order;
       });


      return view('user.profile',compact('orders','fname','lname','address','phone','email'));
    }

    public function getLogout(){
      Auth::logout();
      return redirect()->route('user.signin');
    }
	
    public function getServices(){
    	return view('home.services');
    }	
	
    public function getInnovation(){
    	return view('home.innovation');
    }	
	
    public function getSupport(){
    	return view('home.support');
    }	
	
    public function getContact(){
    	return view('home.contact');
    }
	
	public function addContact(Request $request){
      $contact = new Contact;
	   $contact->name = $request->input('name');
	   $contact->email  = $request->input('email');
	
	   $contact->message  = $request->input('message');
	   
	   $contact->save();
	   return redirect()->route('home.contact');
	 
	 
    }
	public function getFeedback(){
		  $contact = Contact::all();
	return view('admin.feedback',['contact' =>$contact]);
	}
	
	
    public function getAbout(){
    	return view('home.about');
    }
	
    public function getPrivacyPolicy(){
    	return view('home.privacypolicy');
    }
	
    public function getShippingPolicy(){
    	return view('home.shippingpolicy');
    }

	
    public function getShop(){
      $products = Product::all();
      $cat = Category::all();
      $sub_cat = SubCategory::all();
      return view('home.shop',['products' =>$products],compact('cat','sub_cat'));
    	
    }


    public function getShopId($id){
      $products = Product::all()->where('cat_id','=',$id);
      $cat = Category::all();
      $sub_cat = SubCategory::all();
      return view('home.shopC',['products' =>$products],compact('cat','sub_cat'));

      
    }

    public function getShopCId($cat_id,$sub_cat_id){
      $products = Product::all()->where('cat_id','=',$cat_id)->where('sub_cat_id','=',$sub_cat_id);
      $cat = Category::all();
      $sub_cat = SubCategory::all();
      return view('home.shopSC',['products' =>$products],compact('cat','sub_cat'));
      
    }
}
