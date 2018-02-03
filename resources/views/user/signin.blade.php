@extends('layouts.master')

@section('title')
Viscous - Login
@endsection

@section('content')

<div class="banner-top">
	<div class="container">
		<h1>Login Form</h1>
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

@if(Session::has('message'))
<div class="alert alert-danger">

<p>{{Session::get('message')}}</p>

</div>
@endif


		
			<form action="{{route('user.signin')}}" method="post">
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Email" id="email" name="email" value="{{Request::old('email')}}">
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
				 <h3>If you don't have an account with us, Please Register.</h3>
				 
				 <p>Viscous.co is an entity giving hope to the up-coming era of development through not just as our remarkable work in all fields through additive manufacturing and 3D printing technology but also as a proud innovational company. Viscous.co offers the best blend of advancements, profound industry skill and the most adaptable executional choices to meet our client’s needs with customized solutions. We are brand trusted by driving producers, pivotal planners, creators, scholars, researchers and practitioners.</p>
				<a href="{{route('user.signup')}}" class=" hvr-skew-backward">Register</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>


<div style="margin-bottom:10px;"></div>

@endsection