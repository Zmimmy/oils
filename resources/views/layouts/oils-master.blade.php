<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oil Blends</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title m-b-md">
                        Oils
                    </div>
                    <div class="links">
                        <a href="/oils/list">Oils</a>
                        <a href="/oils/add">Add Oil</a>
                        <a href="#">Blends</a>
                    </div>
                </div>
            </div>
            @if (Route::is('oil-add'))
            <div class="row add-oil">
                <div class="col-md-8 col-md-offset-2">
                    @yield('addoil')
                </div>
            </div>
            @endif
            @if (Route::is('oil-list'))
            <div class="row oil-list">
                <div class="col-md-8 col-md-offset-2">
                    @yield('oillist')
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    Built with Laravel - helpful links
                    <div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>