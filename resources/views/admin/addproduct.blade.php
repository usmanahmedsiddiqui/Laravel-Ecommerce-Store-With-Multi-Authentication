@extends('admin.dashboardmaster')

@section('title')
Add Product
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.getproduct')}}">Products</a></li>
        <li class="active">Add New Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Product</h3>
			  
            </div>
			
		
            <form class="form-horizontal" id="formadd" action="{{route('admin.addProduct')}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
			   <div class="row">
				<div class="col-md-6">
				
				
				
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="title" value="" placeholder="Enter Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="price" value="" placeholder="Enter Price">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="description" value="" placeholder="Enter Description">
                  </div>
                </div>



 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
					<input type="file" name="image" id="Image">
                  </div>
                </div>

               <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Select Category</label>
				
                <div class="col-sm-10" style="padding-top: 8px;">
                	<select class="form-control" name="cat_id" >
    @foreach($items as $item)
      <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
    @endforeach
  </select>
				</div>
				</div>


 <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Select Sub Category</label>
				
                <div class="col-sm-10" style="padding-top: 8px;">
                	<select class="form-control" name="sub_cat_id" >
                		<option></option>
    @foreach($sub_items as $sub_item)
      <option value="{{$sub_item->sub_cat_id}}">{{$sub_item->sub_cat_name}}</option>
    @endforeach
  </select>
				</div>
				</div>


               
				</div>
			
				</div>

              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-footer">
               <button type="submit" class="btn btn-info pull-right" id="btnadd">Add</button>
              </div>
              
			  
            </form>
			          </div>
         
        </div>

      </div>
      
    </section>
    
  </div>


@endcontent