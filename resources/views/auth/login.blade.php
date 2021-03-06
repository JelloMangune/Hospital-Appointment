
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Inria Serif' rel='stylesheet'>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="admin/images/med_assis_logo.png" alt="logo" style="width:350px;height:220px;"class="logo-dark" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
        <h1 style="text-align:center;font-family:Inria Serif;font-size:30px;"><b>Sign In</b></h1>
            @csrf
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="margin-right:20px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <a class="btn btn-secondary btn-sm" href="{{url('/');}}" style="margin-right:-10px;font-style:Nunito;padding:6px;padding-left:12px;padding-right:12px;font-size:12px;letter-spacing:1px;">CANCEL</a>
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
