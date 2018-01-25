<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">

        <!--tilte-->
        <title>lajavel</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href={{ asset('css/app.css') }} rel="stylesheet" type="text/css" />
        <link href={{ asset('css/custom.css') }} rel="stylesheet" type="text/css" />
        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{url('/home')}}">Home</a>
                    @else
                        <a href="{{route('login')}}">Login</a>
                        <a href="{{route('register')}}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @yield('title')
                </div>
                    @include('navbar')
                <div class="contents">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="test">
        </div>
    </body>
</html>
