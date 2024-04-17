@extends('app')

@section('title', auth()->check() ? __('site.conference_edit_form_title') : __('site.conference_view_form_title'))

@section('content')
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conference.form')
        @auth
            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">@lang('site.update')</button>
            </div>
        @endauth
    </form>
@endsection
