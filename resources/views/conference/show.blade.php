@extends('app')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="row p-5">
        <div class="col">
            <ul class="list-group">
                @include('conference.list', ['conference' => $conference])
            </ul>
        </div>
    </div>
@endsection
