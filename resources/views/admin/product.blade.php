@extends('admin.dashboardmaster')

@section('title')
Product
@endsection

@section('content')






 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section> 
  
   <a href="{{route('admin.addProduct')}}"><button type="button" style="float:right; margin-right:20px;" class="btn-info btn btn-sm">Add</button></a>
    <!-- Main content -->
    

          
            <!-- /.box-header -->
            <div class="box-body">
            <form action="" id="formdel" method="post">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <td><input type="checkbox" class="checkUncheckAll" /></td>
                  <th>ID</th>
                  <th>CatID</th>
                  <th>Sub CatID</th>
                  <th>ProductName</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Image</th>
                </tr>
                </thead>
               
                <tbody>
                	@foreach($products as $product)
                <tr>
                  <th><input type="checkbox" name="ids[]" class="chkIds" value="" /></th>
                  <th><?php echo $product->id; ?></th>
                  <th><?php echo $product->cat_id; ?></th>
                  <th><?php echo $product->sub_cat_id; ?></th>
                  <th><?php echo $product->title; ?></th>
                  <th><?php echo $product->price; ?></th>
                  <th><?php echo $product->description; ?></th>
                 <th><img src="/{{$product->imagepath}}" alt="hrrlo" height="150" width="150"></th>

                  
                  
                  
                </tr>
                 @endforeach
                </tbody>
              </table>
				<input type="hidden" name="keydel" value="delete"/>
			                </form>
            </div>
            <!-- /.box-body -->
          </div>



@endsection
