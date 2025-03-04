@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="singin-box">
            <div class="singin-left auth-bg">
                <div class="logo">
                    <img src="{{ asset('frontend/images/sai lanka bilss 2.svg') }}" alt="logo">
                </div>
                <a href="{{ route('register') }}" class="tag">Sign Up</a>
            </div>
            <div class="singin-right">
                <div class="main-form">
                    <h4>Welcome Back! Log in to continue.</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                        <div class="form-input-checkbox">
                            <input type="checkbox" name="rememberme" id="rememberme">
                            <label for="rememberme">Remember me</label>
                            <a href="javascript:;">Forgot Password</a>
                        </div>
                        <div class="form-input">
                            <button class="main-btn" type="submit">Log In</button>
                        </div>
                    </form>
                    <p>New member? <a href="{{route("register")}}">singup</a> </p>
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

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
