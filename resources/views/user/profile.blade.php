@extends('layouts.master')
Viscous - Profile
@section('content')

<div class="banner-top">
  <div class="container">
    <h1>My Profile</h1>
    <h2><a href="{{route('product.index')}}">Home</a><label>/</label>Profile</h2>
  </div>
</div>
<br><br><br>
<div class="row">
  
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">

  <form>
<div class="row">

<div class="col-xs-12">
  <div class="row">
    <div class="col-xs-6">
      <div class="form-group">
<label for="card-expiry-month">FirstName</label>
<input type="text" class="form-control" id="card-expiry-month" name="card-expiry-month" value="<?php echo $fname; ?>">
 </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
<label for="card-expiry-year">LastName</label>
<input type="text" class="form-control" id="card-expiry-year" name="card-expiry-year" value="<?php echo $lname; ?>">
 </div>
    </div>
  </div>
</div>


<div class="col-xs-12">
<div class="form-group">
<label for="card-cvc">Address</label>
<input type="text" class="form-control" id="card-cvc" name="card-cvc" value="<?php echo $address; ?>">
  </div>
</div>



 <div class="col-xs-12">

<div class="form-group">
  
<label for="name">Phone No</label>
<input type="text" class="form-control" id="name" name="name" value="<?php echo $phone; ?>">
  </div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label for="address">Email</label>
<input type="text" class="form-control" id="address" name="address" value="<?php echo $email; ?>">
  </div>
</div>
     
     
<br><br><br>



      </form>



</div>
</div>






<div class="row">

<div class="col-md-8 col-md-offset-2">
<h2>My Orders</h2>

<br><br>
@foreach($orders as $order)
<div class="panel panel-default">
  <div class="panel-body">
    <ul class="list-group">
  @foreach($order->cart->items as $item)
  <li class="list-group-item">
  <span class="badge">RS {{ $item['price']}}</span>
 {{$item['item']['title']}} | {{$item['qty']}}
 </li>
@endforeach
  
</ul>
  </div>
  <div class="panel-footer">
<strong>Total Price:RS {{$order->cart->totalPrice}}</strong>
  </div>
</div>
@endforeach
</div>
</div>


@endsection