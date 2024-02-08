<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default""
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>CHABWAKI ONLINE</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/bootstrap.min.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick-theme.css') !!}"/>
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/nouislider.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('vitrine/css/font-awesome.min.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/style.css') !!}"/>
  </head>
  @livewireStyles
</head>
  <body>
    <div class="container-scroller">
        @include('layouts.partials._header')
        @yield('content')
        @include('layouts.partials._footer')
    </div>
    @livewireScripts
  <script src="{!! asset('vitrine/js/jquery.min.js') !!}"></script>
  <script src="{!! asset('vitrine/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('vitrine/js/slick.min.js') !!}"></script>
  <script src="{!! asset('vitrine/js/nouislider.min.js') !!}"></script>
  <script src="{!! asset('vitrine/js/jquery.zoom.min.js') !!}"></script>
  <script src="{!! asset('vitrine/js/main.js') !!}"></script>
  </body>
  @show
  </html>
