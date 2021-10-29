<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        
        <title>Siswaku</title>
        <link href="{{ asset('bootstrap_4_4_1/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet" >
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            @include('navbar')
            @yield('main')
        </div>

        @yield('footer')
    <script src="{{ asset('js/jquery_2_2_1.min.js')}}"></script>
    <script src="{{ asset('bootstrap-4_4_1/js/bootstrap.min.js')}}"></script>

    </body>
</html>