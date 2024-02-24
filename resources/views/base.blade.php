<!DOCTYPE html>
<!--html lang="en"-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHABWAKI || ONLINE</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/bootstrap.min.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/slick-theme.css') !!}"/>
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/nouislider.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('vitrine/css/font-awesome.min.css') !!}">
    <link type="text/css" rel="stylesheet" href="{!! asset('vitrine/css/style.css') !!}"/>

    <script src="{!! asset('vitrine/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/slick.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/nouislider.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/jquery.zoom.min.js') !!}"></script>
    <script src="{!! asset('vitrine/js/main.js') !!}"></script>
  
</head>
<style>
    body{
        font-size: 14px;
    }
</style>
<body>
    
    {{ $slot }}
   
</body>
</html>