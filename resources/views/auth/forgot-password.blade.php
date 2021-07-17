<x-guest-layout>
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-dark" href="{{ route('register') }}" role="button">
            {{ __('Create account') }}</a>
    </div>
    <div class="forgot-password-form-custom">
        <h3 class="mb-5 font-weight-bold">Reset password</h3>
        <x-jet-validation-errors />
        @if (session('status'))
            <div class="alert-success-custom" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="mb-3">
            {{ __('Just let us know your email address and we will email you a password reset link.') }}
        </div>
        <form method="POST" action="/forgot-password">
            @csrf
            <div class="form-group">
                <x-jet-label class="font-weight-bold" value="Email" />
                <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="d-flex flex-column">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </div>





</x-guest-layout>
