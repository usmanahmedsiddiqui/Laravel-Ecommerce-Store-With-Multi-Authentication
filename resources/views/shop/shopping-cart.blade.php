@extends('layouts.master')

@section('title')
Viscos Website
@endsection




@section('content')

<!-- @if(Session::has('cart'))
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<ul class="list-group">

@foreach($products as $product)
<li class="list-group-item">
  <span class="badge">{{$product['qty']}}</span>
  <strong>{{$product['item']['title']}}</strong>
  <span class="label label-success">{{$product['price']}}</span>
  <div class="dropdown btn-group">
    <button class="btn btn-primary  btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     <li><a href="{{route('product.reduceByOne',['id' =>$product['item']['id']])}}">Reduce By 1</a></li>
      <li><a href="{{route('product.removeItem',['id' =>$product['item']['id']])}}">Reduce All</a></li>
      
    </ul>
  </div>

	</li>

@endforeach
</ul>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Total: {{$totalPrice}}</strong>
	</div>
</div>
<hr>

<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
	</div>
</div>
@else
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<h2>No Items in Cart!</h2>
	</div>
</div>


@endif -->















<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
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
		  </tr>
		  @foreach($products as $product)
		  <tr class="cart-header">

			<td class="ring-in"><a href="single.html" class="at-in"><img src="{{$product['item']['imagepath']}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="">{{$product['item']['title']}}</a></h5>
				<p>{{$product['item']['description']}} </p>
			
			</div>
			<div class="clearfix"> </div>
			<div class="close1"> </div></td>
			<td>$100.00</td>
			<td>{{$product['qty']}}</td>
			<td class="item_price">{{$product['price']}}</td>
			<!-- <td class="add-check"><a class="item_add hvr-skew-backward" href="#">Add To Cart</a></td> -->
		  </tr>
		  @endforeach

</table>
</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<strong>Total: {{$totalPrice}}</strong>
	</div>
</div>
<hr>

<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
	</div>
</div>
@else
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<h2>No Items in Cart!</h2>
	</div>
</div>


@endif -->

















@endsection


@section('script')

<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
@endsection