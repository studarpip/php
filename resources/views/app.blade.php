<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="{{ url('/') }}">@lang('site.logo')</a>
            <!-- Links on the right -->
            <div class="ml-auto">
                <a href="{{ url('/conferences') }}" class="btn btn-outline-primary">@lang('site.conferences')</a>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">@lang('site.login')</a>
                @else
                    <a href="{{ route('logout') }}" id="logout-btn" class="btn btn-danger logout-btn">@lang('site.logout')</a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
