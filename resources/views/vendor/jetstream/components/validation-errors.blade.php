@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert-danger-custom p-0 m-0']) !!} role="alert">
        <div class="font-weight-bold p-0 m-0">{{ __('Something went wrong') }}</div>

        @foreach ($errors->all() as $error)
            <p class="p-0 m-0">{{ $error }}</p>
        @endforeach

    </div>
@endif
