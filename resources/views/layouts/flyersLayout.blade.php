<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/dropzone.js"></script> 
    <link href="/css/dropzone.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
</head>
<body>
    <nav>
        @include ('flyers.partials.flyersNav')
    </nav>
    @include ('flyers.partials.flash')

    
    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        @yield('footer')
    </div>
   
</body>
</html>
