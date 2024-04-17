@extends('app')

@section('title', __('site.conferences_list_title'))
@section('content')
    <div class="container">
        <h1 class="mb-4">@lang('site.conferences_list_title')</h1>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-success mb-3">@lang('site.create_conference')</a>
        @endauth
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    @each('conference.list', $conferences, 'conference')
                </ul>
            </div>
        </div>
    </div>
@endsection
