<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name-input" class="form-label">@lang('forms.name')</label>
                        <input id="name-input" type="text" name="name"
                               value="{{ old('name', optional($conference ?? null)->name) }}" class="form-control"
                               @guest readonly @endguest>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description-input" class="form-label">@lang('forms.description')</label>
                        <textarea id="description-input" name="description" class="form-control"
                                  @guest readonly @endguest>{{ old('description', optional($conference ?? null)->description) }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="conference-date-input" class="form-label">@lang('forms.conference_date')</label>
                        <input id="conference-date-input" type="date" name="conference_date"
                               value="{{ old('conference_date', optional($conference ?? null)->conference_date) }}"
                               class="form-control" @guest readonly @endguest>
                        @error('conference_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address-input" class="form-label">@lang('forms.address')</label>
                        <input id="address-input" type="text" name="address"
                               value="{{ old('address', optional($conference ?? null)->address) }}" class="form-control"
                               @guest readonly @endguest>
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
