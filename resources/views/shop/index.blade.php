@extends('layouts.master')

@section('title')
Viscous - Change Is For Better
@endsection



@section('content')

<div class="banner">
	<div class="container">
		<section class="rw-wrapper">
				<h1 class="rw-sentence">
				  <div class="rw-words rw-words-2" style="margin-top:230px;">
					<span>Change Is For Better</span>
					<span>Fabricating Concepts</span>
					<span>Making Your Ideas Real</span>
					<span>Think Dimension Think Us</span>
					<span>There are many variation</span>
					<span>Where Concepts Being Shared....</span>
				  </div>
				</h1>
		</section>
	</div>
</div>

    <div class="content">
      <div class="container">
        <div class="content-top">
          <div class="col-md-6 col-md">
            <div class="col-1">
             <a href="{{route('home.shop')}}" class="b-link-stroke b-animate-go  thickbox">
       <img src="images/Background/back3.jpg" class="img-responsive" alt="" height="857" /><div class="b-wrapper1 long-img"><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">3D Printers</h3><p class="b-animate b-from-right    b-delay03 ">Change Is For Better</p></div></a>

            </div>
            <div class="col-2">
              <h2><a href="{{route('home.about')}}">Reshaping Your Dreams</a></h2>
              <p>Viscous.co is an entity giving hope to the up-coming era of development through not just as our remarkable work in all fields through additive manufacturing and 3D printing technology but also as a proud innovational company.</p>
              <a href="{{route('home.shop')}}" class="buy-now">Buy Now</a>
            </div>
          </div>
          <div class="col-md-6 col-md1">
            <div class="col-3">
              <a href="{{route('home.services')}}"><img src="images/Background/background.jpg" class="img-responsive" alt="">
              <div class="col-pic">
                <label></label>
                <h5>3D Designing</h5>
				<p>Transforming your ideas into reality</p>
              </div></a>
            </div>
            <div class="col-3">
              <a href="{{route('home.services')}}"><img src="images/Background/back4.jpg" class="img-responsive" alt="">
              <div class="col-pic">
                <label></label>
                <h5>Training and Workshop</h5>
				<p>Where Concepts Being Shared....</p>
              </div></a>
            </div>
       </div>
          <div class="clearfix"></div>
        </div>

         @if(Session::has('success'))
              <div class="row">
              <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
          <div id="charge-message" class="alert alert-success">
        {{Session::get('success')}}
      </div>
         </div>
                @endif

      <div class="col-2 content-mid">
        <h3>Trending Items</h3>
		<span class="text-align:center;" align="center">Shop for 20,000+ and get a discount of 5% on each purchase</span>
        <label class="line"></label>

        
        <div class="mid-popular">

          @foreach($products->chunk(4) as $ProductChunk)
          <div class="row">
           @foreach($ProductChunk as $product)
          <div class="col-md-3 item-grid simpleCart_shelfItem">
          <div class=" mid-pop">
          <div class="pro-img">
            <img src="{{$product->imagepath}}" class="img-responsive" alt="" style="height:320px;">
            <div class="zoom-icon ">
             <a class="picture" href="{{$product->imagepath}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>

            </div>
            </div>
            <div class="mid-1">
            <div class="women">
            <div class="women-top">
              <span>{{$product -> title}}</span>
              <h6><a href="{{route('home.shop')}}">{{$product -> description}}</a></h6>
              </div>
              <div class="img item_add pro-img">
              <a href="{{route('product.addToCart',['id' => $product->id])}}"><i class="glyphicon glyphicon-shopping-cart icon"></i></a>
              </div>
              <div class="clearfix"></div>
              </div>
              <div class="mid-2">
                <p ><label>$100.00</label><em class="item_price">${{$product->price}}</em></p>
                  <div class="block">
                  <div class="starbox small ghosting"> </div>
                </div>
                
                <div class="clearfix"></div>
              </div>
              
            </div>
          </div>
          </div>

       @endforeach
        </div>
         <div style="margin-top:30px;"></div>
          @endforeach






    <div class="brand">
      <h2 align="center">Featured On</h2>
      <br><br>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b1.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b2.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b3.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b4.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b5.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b6.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-2 brand-grid">
          <img src="images/FeaturedOn/b7.png" class="img-responsive" alt="">
        </div>
        <div class="clearfix"></div>
      </div>
 	  
      </div>
      
    </div>


  </div>
</div>

@endsection
@section('script')
@endsection