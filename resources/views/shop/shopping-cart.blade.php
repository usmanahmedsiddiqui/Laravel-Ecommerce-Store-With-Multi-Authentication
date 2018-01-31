@extends('layouts.master')

@section('title')
Viscous - Shopping Cart
@endsection

@section('content')

<div class="banner-top">
	<div class="container">
		<h1>Shopping-Cart</h1>
		<h2><a href="{{route('product.index')}}">Home</a><label>/</label>Cart</h2>
	</div>
</div>

@if(Session::has('cart'))
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="table-grid">Item</th>
					
			<th>Prices</th>
			<th >Quantity </th>
			<th>Subtotal</th>
		    <th>Remove Item</th>
		  </tr>
		  @foreach($products as $product)
		  <tr class="cart-header">

			<td class="ring-in"><a href="" class="at-in"><img src="{{$product['item']['imagepath']}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="">{{$product['item']['title']}}</a></h5>
				<p>{{$product['item']['description']}} </p>
			
			</div>
			<div class="clearfix"> </div>
			<td>RS {{$product['item']['price']}}</td>
			<td>{{$product['qty']}}</td>
			<td class="item_price">RS {{$product['price']}}</td>
			<td>
				<div class="dropdown">
	 <a href="{{route('product.reduceByOne',['id' =>$product['item']['id']])}}"><button class="btn btn-primary">Remove</button></a>
   
      
   
</div>
</td>
			
		  </tr>
		  @endforeach

</table>
</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Total: RS {{$totalPrice}}</strong>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Discounted Price: RS {{$discountPrice}}</strong>
	</div>
</div>
<hr>

<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" align="right">
		<a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
		<br><br><br>
	</div>
</div>
@else
<div class="row">
	<br><br>
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<h2>No Items in Cart!</h2>
		<br><br><br>
	</div>
</div>


@endif 

@endsection

@section('script')

@endsection