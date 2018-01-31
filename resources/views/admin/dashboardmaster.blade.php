<!doctype html>
<html>
<head>
	<meta charset="UTG-8">
    <title>@yield('title')</title>	
     <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <link href="{{ URL::asset('dist/css/AdminLTE.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/morris/morris.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('plugins/iCheck/flat/blue.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">


</head>





<style>

@yield('styles')


</style>



<body>
	@include('admin.sidebar');


  
  @yield('content')






<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>













<script type="text/javascript" src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/knob/jquery.knob.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/knob/jquery.knob.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/demo.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>





@yield('script')





</body>
</html>
















