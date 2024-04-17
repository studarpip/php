<!-- conference/list_item.blade.php -->
<li class="list-group-item mb-3">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4>{{ $conference['title'] }}</h4>
            <p>Date: {{ \Carbon\Carbon::parse($conference['conference_date'])->format('F d, Y') }}</p>
            <p>Address: {{ $conference['address'] }}</p>
        </div>
        <div>
            @auth
                <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}" class="btn btn-edit btn-primary">@lang('site.edit')</a>
                <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" data-delete>@lang('site.delete')</button>
                </form>
            @else
                <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}" class="btn btn-primary">@lang('site.show_details')</a>
            @endauth
        </div>
    </div>
</li>