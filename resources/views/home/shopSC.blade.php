@extends('layouts.master')

@section('title')
Viscous - Sub Categories
@endsection

@section('content')

<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<h2><a href="{{route('product.index')}}">Home</a><label>/</label>Products</h2>
	</div>
</div>

		<div class="product">
			<div class="container">
			<div class="col-md-2 product-bottom">

				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categories</h4>
						
							<ul class="menu-drop">
							@foreach($cat as $ca)
							<li class="item1"><a href="{{route('home.shopID',['id' =>$ca['cat_id']])}}">{{$ca->cat_name}}</a>
								
								<ul class="cute">
									@foreach($sub_cat as $sc)
									@if($ca->cat_id == $sc->parent_id)
									<li class="subitem1"><a href="{{route('home.shopCID',['cat_id' =>$ca['cat_id'],'sub_cat_id' =>$sc['sub_cat_id']])}}">{{$sc->sub_cat_name}}</a></li>
									  @else
                                 <li></li>
                                 @endif
									@endforeach
									
								</ul>
                               
							</li>
							@endforeach
							
						</ul>
					</div>
				
		</div>
			
				<div class="col-md-10">

					 <div class="mid-popular">

          @foreach($products->chunk(4) as $ProductChunk)
          <div class="row">
           @foreach($ProductChunk as $product)
          <div class="col-md-3 item-grid simpleCart_shelfItem">
          <div class=" mid-pop">
          <div class="pro-img">
            <img src="{{URL::to($product->imagepath)}}" class="img-responsive" alt="" style="height:280px;">
            <div class="zoom-icon ">

            </div>
            </div>
            <div class="mid-1">
            <div class="women">
            <div class="women-top">
              <span>{{$product -> title}}</span>
              <h6><a href="{{route('home.shop')}}" style="font-size:16px;">{{$product -> description}}</a></h6>
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
		</div>

				</div>

			</div>
		</div>	
@endsection