
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	 <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" type="text/css" href="{{URL::to('css/admin/AdminLTE.min.css')}}">
	</head>





<body class="hold-transition login-page">

<div class="container">
		

@if(count($errors)>0)
<div class="alert alert-danger">
		@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif


<div class="login-box">
  <div class="login-logo">
    <b>Admin Login
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    
    <form action="{{route('adminsignin')}}" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="email" id="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login">
          {{csrf_field()}}
        </div>
      </div>
	  
    </form>

    

    

  </div>
</div>



</div>


<div style="margin-bottom:10px;"></div>
</body>
</html>