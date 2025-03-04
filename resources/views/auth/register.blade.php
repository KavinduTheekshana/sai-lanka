@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="singin-box">
            <div class="singin-left auth-bg">
                <div class="logo">
                    <img src="{{ asset('frontend/images/sai lanka bilss 2.svg') }}" alt="logo">
                </div>

                <a href="{{route("login")}}" class="tag">Log In</a>
            </div>
            <div class="singin-right">
                <div class="main-form">
                    <h4>Join Us Today! Create your account.</h4>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-input">
                            <input type="text" name="name" id="validationCustom01" placeholder="User name *"
                                required="">
                            <label for="validationCustom01"><i class="fas fa-user"></i></label>
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" id="validationCustom02" placeholder="Email Address *"
                                required="">
                            <label for="validationCustom02"><i class="fas fa-envelope"></i></label>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" id="validationCustom04" placeholder="Password *"
                                required="">
                            <label for="validationCustom04"><i class="fas fa-lock"></i></label>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password_confirmation" id="validationCustom04" placeholder="Password Confirmation *"
                                required="">
                            <label for="validationCustom04"><i class="fas fa-lock"></i></label>
                        </div>
                        <div class="form-input-checkbox">
                            <input type="checkbox" name="rememberme" id="rememberme">
                            <label for="rememberme">Remember me</label>
                            <a href="javascript:;">Forgot Password</a>
                        </div>
                        <div class="form-input">
                            <button class="main-btn" type="submit">Sing Up</button>
                        </div>
                    </form>
                    <p>Already A member? <a href="{{route("login")}}">login</a> </p>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
