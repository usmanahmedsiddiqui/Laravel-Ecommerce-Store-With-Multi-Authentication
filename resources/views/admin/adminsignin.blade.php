
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>




<div class="container">
		

@if(count($errors)>0)
<div class="alert alert-danger">
		@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
            <h2>SignIn</h2>
		
			<form action="{{route('adminsignin')}}" method="post">
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Email" id="email" name="email">
					
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" id="password" name="password">
					
				</div>
				   
				<label class="hvr-skew-backward">
					<input type="submit" value="login">
					<!-- <button type="submit" class="btn btn-primary">Sign In</button> -->
				</label>
				{{csrf_field()}}
			</div>
				<div class="clearfix"> </div>
			</form>
		

</div>


<div style="margin-bottom:10px;"></div>
</body>
</html>