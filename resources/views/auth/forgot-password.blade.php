<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Inria Serif' rel='stylesheet'>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="admin/images/med_assis_logo.png" alt="logo" style="width:300px;height:200px;"class="logo-dark" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
            <a class="btn btn-secondary btn-sm" href="{{url('/');}}" style="margin-right: 10px;font-style:Nunito;padding:6px;padding-left:12px;padding-right:12px;font-size:12px;letter-spacing:1px;">CANCEL</a>
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
