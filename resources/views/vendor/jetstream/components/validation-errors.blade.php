@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger-custom text-sm p-2']) !!} role="alert">
        <div class="font-weight-bold">{{ __('Something went wrong') }}</div>

        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

    </div>
@endif
