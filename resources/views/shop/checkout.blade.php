@extends('layouts.master')

@section('title')
Viscos Website
@endsection




@section('content')

<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <h1>Checkout</h1>
      <h4>Your Total : ${{$total}}</h4>

      <div id="charge-error" class="alert alert-danger {{!Session::has('error')? 'hidden' : ''}}">
{{Session::get('error')}}

      </div>
      <form action="{{route('checkout')}}" method="post" id="checkout-form">


<div class="row">
		<div class="col-xs-12">

<div class="form-group">
	
<label for="name">Name</label>
<input type="text" class="form-control" id="name" name="name" required>
  </div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label for="address">Address</label>
<input type="text" class="form-control" id="address" name="address" required>
  </div>
</div>
<hr>

<div class="col-xs-12">
<div class="form-group">
<label for="card-name">Card Holder Name</label>
<input type="text" class="form-control" id="card-name" name="card-name" required>
  </div>
</div>


<div class="col-xs-12">
<div class="form-group">
<label for="card-number">Credit Card Number</label>
<input type="text" class="form-control" id="card-number" name="card-number" required>
  </div>
</div>




<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-6">
			<div class="form-group">
<label for="card-expiry-month">Card Expiry Month</label>
<input type="text" class="form-control" id="card-expiry-month" name="card-expiry-month" required>
 </div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
<label for="card-expiry-year">Credit Expiry Year</label>
<input type="text" class="form-control" id="card-expiry-year" name="card-expiry-year" required>
 </div>
		</div>
	</div>
</div>


<div class="col-xs-12">
<div class="form-group">
<label for="card-cvc">CVC</label>
<input type="text" class="form-control" id="card-cvc" name="card-cvc" required>
  </div>
</div>
</div>
     
     {{csrf_field()}}
     <button type="submit" class="btn btn-success">Buy Now</button>
    




      </form>
	</div>
	</div>

	@endsection

	@section('script')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="{{URL::to('src/js/checkout.js')}}"></script>
	@endsection