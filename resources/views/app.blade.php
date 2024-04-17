<!doctype html>
<html lang="en">
<head
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Conferences</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div>
    <nav class="navbar navbar-dark bg-dark">
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary ">@lang('site.login')</a>
        @else
            <a href="{{ route('logout') }}" id="logout-btn" class="btn btn-danger logout-btn">@lang('site.logout')</a>
            <form action="{{ route('logout') }}" method="GET" id="logout-form" class="d-none">
                @csrf
            </form>
        @endguest
    </nav>
    @yield('content')
</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
