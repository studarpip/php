@extends('app')

@section('title', __('site.conference_creation_form_title'))

@section('content')
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('conference.form')
        <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">@lang('site.create')</button>
        </div>
    </form>
@endsection
