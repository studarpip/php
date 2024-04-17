@extends('app')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('site.login') }}</title>
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{ route('login') }}" method="POST" class="card card-body">
                    @csrf
                    <input type="text" id="title-input" name="username"
                           placeholder=@lang('site.username') value="{{ old('username') }}" class="form-control">
                    @error('username')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" id="password-input" name="password"
                           placeholder=@lang('site.password') value="{{ old('password') }}" class="form-control">
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <button type="submit" class="btn btn-primary">@lang('site.login_button')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
