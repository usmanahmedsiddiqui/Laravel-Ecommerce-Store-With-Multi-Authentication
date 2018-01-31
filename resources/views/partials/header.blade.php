<div class="header">
<div class="container">
    <div class="head">
      <div class=" logo">
        <a href="{{route('product.index')}}"><img src="images/logo/logo.png" alt="" width=""></a> 
      </div>
    </div>
  </div>
  <div class="header-top">
    <div class="container">
    <div class="col-sm-5 header-login">
          <ul >
			<li><span>Any Queries?</span></li>
			&nbsp;
			<li><i class="fa fa-phone" style="font-size:12px"></i>
			&nbsp;
			<a href=""> +92-333-0600783 </a></li>
			&nbsp;
			<li><i class="fa fa-envelope-open" style="font-size:12px"></i>
			&nbsp;<a href="mailto:info@viscous.co">info@viscous.co </a></li>
          
			
           </ul>
        </div>
        
      <div class="col-md-offset-2 col-sm-5 header-social">    
          <ul >
  @if(Auth::check())
            <li class="col-md-offset-1"><a href="{{route('user.profile')}}">User Profile</a></li>
          
            <li class="col-md-offset-1"><a href="{{route('user.logout')}}">Logout</a></li>
            @else
            <li class="col-md-offset-1"><a href="{{route('user.signup')}}">Register</a></li>
            <li class="col-md-offset-1"><a href="{{route('user.signin')}}">Login</a></li>
            @endif
          <li></li>
           <li class="col-md-offset-1"><a href="https://www.facebook.com/viscous.co/" class="fa fa-facebook"></a></li>
           &nbsp,
		   <li><a href="https://www.facebook.com/viscous.co/" class="fa fa-twitter"></a></li>
            
          </ul>
          
      </div>
        <div class="clearfix"> </div>
    </div>
    </div>
    
    <div class="container">
    
      <div class="head-top">
      
     <div class="col-sm-8 col-md-offset-2 h_menu4">
        <nav class="navbar nav_bottom" role="navigation">
 
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="{{route('product.index')}}">Home</a></li>
            <li><a class="color4" href="{{route('home.about')}}">About</a></li>
            <li><a class="color" href="{{route('home.shop')}}">Products</a></li>
            <li class="color1"> <a class="color2" href="{{route('home.services')}}" >Services</span></a> </li>        
            <li><a class="color3" href="{{route('home.innovation')}}">Innovation</a></li>
            <li ><a class="color6" href="{{route('home.contact')}}">Contact</a></li>
        </ul>
     </div>

</nav>
      </div>
      <div class="col-sm-2">
        <ul class="heart">
        <li>
          </ul>
          <div class="cart box_1">
            <span class="badge">{{Session::has('cart')? Session::get('cart')->totalQty: ''}}</span>
            <a href="{{route('product.shoppingCart')}}">
              <img src="images/cart.png" alt=""/>
            </a>


            <p><a href="{{route('product.shoppingCart')}}" class="simpleCart_empty">Shopping Cart</a></p>

          </div>
          <div class="clearfix"> </div>
          
                        
      
      <link rel="stylesheet" type="text/css" href="{{URL::to('css/popuo-box.css')}}">
      <script src="{{URL::to('js/jquery.magnific-popup.js')}}"></script>
      
  
      <div id="small-dialog" class="mfp-hide">
        <div class="search-top">
          <div class="login-search">
            <input type="submit" value="">
            <input type="text" value="Search.." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search..';}">   
          </div>
          <p>Shopin</p>
        </div>        
      </div>
     <script>
      $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
      });
                                            
      });
    </script>   
            
      </div>
      <div class="clearfix"></div>
    </div>  
  </div>  
</div>

 @section('script')
 




<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="js/jquery.min.js"></script>
<script src="js/jstarbox.js"></script>
  <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>










<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <script type="text/javascript" charset="utf-8">
    $(function() {
      $('a.picture').Chocolat();
    });
    </script>
<script>
      $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
      });
                                            
      });
    </script> 



 @endsection