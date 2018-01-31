<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
use App\Order;
use Auth;
use App\Category;
use App\SubCategory;
use DB;
use App\file;
use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    public function getIndex(){
    	$products = Product::all()->random(4);
    	return view('shop.index',['products' =>$products]);
    }


    public function getAddtoCart(Request $request,$id){

             $product = Product::find($id);
             $oldCart = Session::has('cart')? Session::get('cart'):null;
             $cart = new Cart($oldCart);
             $cart->add($product,$product->id);

             $request->session()->put('cart',$cart);
            
             return redirect()->back();
    }

    public function getReduceByOne($id){
       $oldCart = Session::has('cart') ? Session::get('cart') : null;
       $cart = new Cart($oldCart);
       $cart->reduceByOne($id);
       if(count($cart->items)>0){
       	Session::put('cart',$cart);
       }
       else{
       	Session::forget('cart');
       }
       
       return redirect()->route('product.shoppingCart');

    }
    public function getRemoveItem($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
       $cart = new Cart($oldCart);
       $cart->removeItem($id);
       if(count($cart->items)>0){
       	Session::put('cart',$cart);
       }
       else{
       	Session::forget('cart');
       }
       
       return redirect()->route('product.shoppingCart');
    }


    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'discountPrice'=>$cart->discountPrice]);
    }


    public function getCheckout(){

    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	$total = $cart->totalPrice;
    	return view('shop.checkout',['total' => $total]);
    }

   


    public function postCheckout(Request $request){

    	if(!Session::has('cart')){
    		return redirect()->route('shop.shoppingCart');
    	}
    	$oldCart = Session::get('cart');
    	$cart  = new Cart($oldCart);

    	Stripe::setApiKey('sk_test_4d6QBjaPYt4dayRiVD68MvOK');
    
    	try{
    		$charge = Charge::create(array(

                 "amount" => $cart->totalPrice *100,
                 "currency" =>"usd",
                 "source" => 'tok_visa',
                 "description" => "Test Charge"





    			));

                $order = new Order();
                $order->cart = serialize($cart);
                $order->address = $request->input('address');
                $order->name = $request->input('name');
                $order->payment_id = $charge->id;

                Auth::user()->orders()->save($order);

    	}catch (\Exception $e){
    		return redirect()->route('checkout')->with('error',$e->getMessage());
    	}
    	Session::forget('cart');
    	return redirect()->route('product.index')->with('success','Successfully purchased products!');

    }

    public function getProduct(){
     $products = Product::all();
     return view('admin.product',['products' =>$products]);
    }

    public function addProduct(){
      $items = Category::all(['cat_id', 'cat_name']);
      $sub_items = SubCategory::all(['sub_cat_id','sub_cat_name','parent_id']);
      return view('admin.addproduct',compact('items',$items),compact('sub_items',$sub_items));

    }
    public function postaddProduct(Request $request){
    $product  = new Product;
    $product->title =$product_name= $request->input('title');
    $product->description =$request->input('description');
    $product->price =$request->input('price');
    $product->cat_id =$request->input('cat_id');
    $product->sub_cat_id =$request->input('sub_cat_id');

    if($product->sub_cat_id==null){
      $product->sub_cat_id = 0;
    }

    if(Input::hasFile('image')){

             $file = Input::file('image');
             $file->move(public_path(). '/', $file->getClientOriginalName());
             $product->imagepath = $file->getClientOriginalName();

    }
         

   $check_product = DB::table('product')
   ->where('title',$product_name)
   ->count();
   if($check_product>0){

            return redirect()->route('admin.getproduct')->with('error','Category name already exist');
        } else {
            $product->save();
              return redirect()->route('admin.getproduct')->with('success','Successfully added category');
        
   }
      

    }
}
