<x-guest-layout>
    <div class="register-form-custom">
        <h3 class="mb-5 font-weight-bold">Registration</h3>
        <x-jet-validation-errors />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <x-jet-label class="font-weight-bold" value="{{ __('Name') }}" />

                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                <x-jet-input-error for="name"></x-jet-input-error>
            </div>

            <div class="form-group">
                <x-jet-label class="font-weight-bold" value="{{ __('Email') }}" />

                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                    :value="old('email')" required placeholder="Email" />
                <x-jet-input-error for="email"></x-jet-input-error>
            </div>

            <div class="form-group">
                <x-jet-label class="font-weight-bold" value="{{ __('Password') }}" />

                <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                    name="password" required autocomplete="new-password" placeholder="Password" />
                <x-jet-input-error for="password"></x-jet-input-error>
            </div>

            <div class="form-group">
                <x-jet-label class="font-weight-bold" value="{{ __('Confirm password') }}" />

                <x-jet-input class="form-control" type="password" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="terms" name="terms" />
                        <label class="custom-control-label" for="terms">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
]) !!}
                        </label>
                    </div>
                </div>
            @endif

            <div class="mb-0">
                <div class="d-flex justify-content-end align-items-baseline">
                    <a class="text-muted mr-3 text-decoration-none" href="{{ url('/') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button>
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
        </form>

    </div>


</x-guest-layout>
