<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Electro - HTML Ecommerce Template</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/bootstrap.min.css') !!}">
  <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick.css') !!}">
  <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick-theme.css') !!}"/>
  <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/nouislider.min.css') !!}"/>
  <link rel="stylesheet" href="{!! asset('vitrine/css/font-awesome.min.css') !!}">
  <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/style.css') !!}"/>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @livewireStyles

  </head>
  <body>
    <div class="container-scroller">
        @include('layouts.partials._header')
        @yield('content')
        @include('layouts.partials._footer')
    </div>
    @livewireScripts
  <!-- /FOOTER -->

		<!-- jQuery Plugins -->
		{{-- <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script> --}}
		<script src="{!! asset('vitrine/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/slick.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/nouislider.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/jquery.zoom.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/main.js') !!}"></script>
  
	</body>
  @show
  </html>