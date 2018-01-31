
@extends('layouts.master')

@section('title')
Viscous - Contact
@endsection



@section('content')
  <div class="banner-top">
  <div class="container">
    <h1>Contact</h1>
    <em></em>
    <h2><a href="{{route('product.index')}}">Home</a><label>/</label>Contact</h2>
  </div>
</div>  
    
      <div class="contact">
          
        <div class="contact-form">
          <div class="container">
          <div class="col-md-4 contact-left">
            
          <div class="address">
          <div class=" address-grid">
              <i class="glyphicon glyphicon-map-marker"></i>
              <div class="address1">
                <h3>Address</h3>
                <p>Viscous.Co Office, University Road,<br/> NEDUET 
Karachi, Pakistan</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class=" address-grid ">
              <i class="glyphicon glyphicon-phone"></i>
              <div class="address1">
              <h3>Call us at:<h3>
                <p>+92 333 365 7858</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class=" address-grid ">
              <i class="glyphicon glyphicon-envelope"></i>
              <div class="address1">
              <h3>Email:</h3>
                <p><a href="mailto:info@example.com"> info@viscous.co</a></p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class=" address-grid ">
              <i class="glyphicon glyphicon-bell"></i>
              <div class="address1">
                <h3>Open Hours:</h3>
                <p>Timings: <br/>
Monday - Friday : 09:00 AM to 05:00 PM <br/>Saturday: 10:00am to 5:00 pm<br/>
Sunday closed</p>
              </div>
              <div class="clearfix"> </div>
            </div>
</div>
        </div>
        <div class="col-md-8 contact-top">
          <h2>Send us a message:</h2>
            <br/><p>If you would like to contact us, please provide your personal details and send your queries. Your comments are important to us: </p>
          <br/><br/>
      
@if(count($errors)>0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
          <form action="{{route('home.contact')}}" method="post">
            <div>
              <span>Your Name </span>   
              <input type="text" name="name" required class="col-md-12">           
            </div>
            <div>
              <span>Your Email </span><br>
              <input type="email" name="email" required class="col-md-12">           
            </div>
            
            <div>
              <span>Your Message</span>   
              <textarea name="message" required class="col-md-12"> </textarea>  
            </div>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" >
            <label class="hvr-skew-backward">
		
                <input type="submit">
            </label>
</form>           
        </div>
    <div class="clearfix"></div>
    </div>
    </div>
    <div class="map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.0575334535324!2d67.11039141447391!3d24.930109884021142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338c0a8566121%3A0x78a2a8fce3d5dc42!2sViscous.Co!5e0!3m2!1sen!2s!4v1504158628031" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>    

	</div>
  </div>
    </div>
  
@endsection