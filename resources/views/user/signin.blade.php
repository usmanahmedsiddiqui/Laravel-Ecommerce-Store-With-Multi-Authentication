@extends('layouts.master')

@section('title')
Viscos Website
@endsection




@section('content')

<div class="banner-top">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="{{route('product.index')}}">Home</a><label>/</label>Login</h2>
	</div>
</div>






<div class="container">
		<div class="login">

@if(count($errors)>0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
		
			<form action="{{route('user.signin')}}" method="post">
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Email" id="email" name="email">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" id="password" name="password">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   
				<label class="hvr-skew-backward">
					<input type="submit" value="login">
					<!-- <button type="submit" class="btn btn-primary">Sign In</button> -->
				</label>
				{{csrf_field()}}
			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				<a href="{{route('user.signup')}}" class=" hvr-skew-backward">Register</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>


<div style="margin-bottom:10px;"></div>











	<!-- <form action="{{route('user.signin')}}" method="post">
  <div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" id="email" name="email">
  </div>


<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign In</button>

    {{csrf_field()}}

	</form>
	<p>Don't have an account?<a href="{{route('user.signup')}"><i>Sign Up</i></a></p>

</div>
</div> -->
@endsection