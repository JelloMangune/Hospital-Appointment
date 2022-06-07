<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Inria Serif' rel='stylesheet'>
<title>Register</title>
<link rel="shortcut icon" href="admin/images/PIN.png" />
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="admin/images/med_assis_logo.png" alt="logo" style="width:250px;height:100px;"class="logo-dark" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            <h1 style="text-align:center;font-family:Inria Serif;font-size:30px;"><b>Sign Up</b></h1>
            @csrf
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="E.G. John Doe" name="name" :value="old('name')" required autofocus autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="email@domain.com" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" placeholder="E.G. 09123456789" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" placeholder="E.G. #120 Bayabas Str, Angeles City Pampanga" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password must be at least 8 characters" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="margin-right:80px;">
                    {{ __('Have an account?') }}
                </a>
                <a class="btn btn-secondary btn-sm" href="{{url('/');}}" style="margin-right:-10px;font-style:Nunito;padding:6px;padding-left:12px;padding-right:12px;font-size:12px;letter-spacing:1px;">CANCEL</a>
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
