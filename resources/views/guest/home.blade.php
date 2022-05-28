<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="guest-home-container">
            <div class="flex-center position-ref">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('admin.home') }}">Home</a>
                            <a href="{{ route('admin.posts.index') }}">Posts</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <div id="root"></div>

        <script src="{{ asset('js/front.js') }}" ></script>
    </body>
</html>