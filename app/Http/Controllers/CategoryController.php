<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Session;
use App\User;
use App\SubCategory;
class CategoryController extends Controller
{
    public function getCategories(){
  $category = Category::all();
  return view('admin.category',['category' =>$category]);

}


public function AddCategory(){

  return view('admin.addcategory');
}


public function postAddCategory(Request $request){

	$category  = new Category;
    $category->cat_name =$category_name= $request->input('cat_name');
    $category->cat_desc =$request->input('cat_desc');

   $check_category = DB::table('tbl_category')
   ->where('cat_name',$category_name)
   ->count();
   if($check_category>0){

            return redirect()->route('admin.category')->with('error','Category name already exist');
        } else {
            $category->save();
              return redirect()->route('admin.category')->with('success','Successfully added category');
        
   }
}

public function getSubCategory(){
    $subcategory = SubCategory::all();
	return view('admin.subCategory',['subcategory' =>$subcategory]);
}

public function addSubCategory(){
	 $items = Category::all(['cat_id', 'cat_name']);
	return view('admin.addSubCategory',compact('items',$items));
}

public function postaddSubCategory(Request $request){

	$subCategory = new SubCategory;
	$subCategory->sub_cat_name = $sub_category_name = $request->input('sub_cat_name');
	$subCategory->parent_id = $request->input('parent_id');

	$check_category = DB::table('tbl_sub_category')
	->where('sub_cat_name',$sub_category_name)
	->count();
	if($check_category>0){
		return redirect()->route('admin.subCategory')->with('error','Category name already exist');
	}
	else{
		$subCategory->save();
		return redirect()->route('admin.subCategory')->with('success','Successfully added category');
	}
}

}
