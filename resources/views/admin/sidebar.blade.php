
<head>
  <link rel="stylesheet" type="text/css" href="{{URL::to('src/dist/css/AdminLTE.min.css')}}">
 <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
</head>


<aside class="main-sidebar">
    
    <section class="sidebar">
     
      <ul class="sidebar-menu">
	  
        <li class="header">MAIN NAVIGATION</li>
		        <li><a href="{{route('dashboard')}}"><i class="fa fa-circle-o text-red"></i> <span>Dashboard</span></a></li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user')}}"><i class="fa fa-circle-o"></i>User</a></li>
			<li>
          </ul>
        </li>
			
	
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Inventory System</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.category')}}"><i class="fa fa-circle-o"></i>Categories</a></li>
            <li><a href="{{route('admin.getproduct')}}"><i class="fa fa-circle-o"></i>Products</a></li>
            <li><a href="{{route('admin.subCategory')}}"><i class="fa fa-circle-o"></i>Sub Categories</a></li>
          </ul>
   
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Finance System</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.orders')}}"><i class="fa fa-circle-o"></i>Orders</a></li>
          </ul>
        </li>
		
		
		
		
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Feedback</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.feedback')}}"><i class="fa fa-circle-o"></i>Feedbacks</a></li>
          </ul>
        </li>
		
		
		



          <li class="treeview">
         <li> <a href="{{route('admin.signout')}}">Logout</a></li>

        </li>
		
      
      </ul>
    </section>
   
  </aside>

