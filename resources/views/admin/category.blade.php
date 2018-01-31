@extends('admin.dashboardmaster')

@section('title')
Categories
@endsection

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  @if(count($errors)>0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif

      <h1>
        Catagories
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Catagories</li>
      </ol>
    </section> 
    
    <a href="{{route('admin.addCategory')}}"><button type="button" style="float:right; margin-right:20px;" class="btn-info btn btn-sm">Add</button></a>
    <!-- Main content -->
    
    
          <!-- /.box -->

          
            <!-- /.box-header -->
            <div class="box-body">
            <form action="" id="formdel" method="post">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
           
                  <th>Id</th>
                  <th>CatagoryName</th>
                  <th>CategoryDescription</th>

				 
                </tr>
                </thead>
               
                <tbody>
                	 @foreach($category as $cat)
                <tr>
                  <th><?php echo $cat->cat_id; ?></th>
                  <th><?php echo $cat->cat_name; ?></th>
                  <th><?php echo $cat->cat_desc; ?></th>
                </tr>
                 @endforeach
                </tbody>
              </table>
				<input type="hidden" name="keydel" value="delete"/>
			                </form>
			                  </div>
            
          </div>
       
    
</div>







@endsection