@extends('admin.dashboardmaster')

@section('title')
Users
@endsection

@section('content')








 <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users</h3>
	
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
			<form action="" method="post" >
              <table id="example1" class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>User ID</th>
				  
                  <th>Username</th>
                </tr>
                </thead>
                <tbody>
				  @foreach($admins as $admin)
                <tr>
                  
				  
                 
                  <td><?php echo $admin->id; ?></td>
                  <td><?php echo $admin->email; ?></td>
                 
</td>
                </tr>
               @endforeach
                </tbody>
              </table>
			  <input type="hidden" name="keydel" value="delete" />
			  </form>
            </div>            
          </div>
        </div>
      </div>
    </section>
  </div>








@endsection