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
        <li class="active">Orders</li>
      </ol>
    </section> 

    <!-- Main content -->
    

          
            <!-- /.box-header -->
            <div class="box-body">
            <form action="" id="formdel" method="post">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
               
                  <th>ID</th>
                  <th>User Id</th>
                  <th>Address</th>
                  <th>Name</th>
                  <th>Payment Id</th>
                  <th>Cart</th>
            
                </tr>
                </thead>
               
                <tbody>
                @foreach($orders as $order)
                <tr>
                  
                  <th><?php echo $order->id; ?></th>
                  <th><?php echo $order->user_id; ?></th>
                 
                  <th><?php echo $order->address; ?></th>
                  <th><?php echo $order->name; ?></th>
                  <th><?php echo $order->payment_id; ?></th>
                   <th><?php echo $order->cart;?></th>

                  
                  
                  
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
