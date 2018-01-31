@extends('admin.dashboardmaster')

@section('title')

Add SubCategory
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        Categories     </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.category')}}">Categories</a></li>
        <li class="active">Add New Category</li>
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
              <h3 class="box-title">Add New Category</h3>
		

            </div>
			
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('admin.addsubCategory')}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
			  
              
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="sub_cat_name" placeholder="Enter Catagory Name">
                  </div>
                </div>
                
               
				  
               
        s


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Parent Category</label>
 <div class="col-sm-10">
 <select class="form-control" name="parent_id" >
    @foreach($items as $item)
      <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
    @endforeach
  </select>
  </div>
</div>

              </div>
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" >
              <!-- /.box-body -->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
             
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

