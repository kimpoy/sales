<x-guest-layout>
    @include('auth.verification')
    <div class="container-custom">
        <div class="cover-custom bg-primary">
            <img class="bicycle" src="{{ asset('img/bicycle.jpg') }}">
        </div>
        <div class="content-custom p-3">
            <div class="d-flex justify-content-end">
                <a class="btn btn-dark" href="{{ route('register') }}" role="button">
                    {{ __('Create account') }}</a>
            </div>

            <div class="login-form-custom">

                <h3 class="mb-5 font-weight-bold">Login to Sales</h3>
                <x-jet-validation-errors />
                @if (session('status'))
                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <x-jet-label class="font-weight-bold" value="{{ __('Email') }}" />

                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                            :value="old('email')" placeholder="Email" required />
                        <x-jet-input-error for="email"></x-jet-input-error>
                    </div>

                    <div class="form-group">
                        <x-jet-label class="font-weight-bold" value="{{ __('Password') }}" />

                        <x-jet-input class="{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                            name="password" required autocomplete="current-password" placeholder="Password" />
                        <x-jet-input-error for="password"></x-jet-input-error>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox d-flex justify-content-between">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <label class="custom-control-label" for="remember_me">
                                {{ __('Remember Me') }}
                            </label>


                        </div>
                    </div>

                    <div class="mb-0">
                        <div class="d-flex flex-column">

                            <x-jet-button>
                                {{ __('Log in') }}
                            </x-jet-button>
                            <a class="text-dark mt-2" href="{{ route('register') }}">
                                <u>{{ __('New? Register here') }}</u>
                            </a>

                            @if (Route::has('password.request'))
                                <a class="text-dark" href="{{ route('password.request') }}">
                                    <u>{{ __('Reset your password') }}</u>
                                </a>
                            @endif

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>



    </x-jet-authentication-card> --}}
</x-guest-layout>
