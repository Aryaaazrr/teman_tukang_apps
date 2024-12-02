@extends('website.layout')

@section('title', 'Sign In')

@section('content')
    <section class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-32 md:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex flex-col justify-center items-center my-6">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                    <div class="flex flex-col justify-center items-center gap-2 w-10/12 my-2">
                        <h1 class="text-2xl font-bold text-black dark:text-white">Sign In</h1>
                        <p class="text-base text-center font-medium text-black dark:text-white">Enter your email address for
                            sign in to your account</p>
                    </div>
                </div>

                <!-- Session Status -->
                {{-- @if (session('status')) --}}
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                {{-- @endif --}}

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-2">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-col items-center justify-center my-6">
                        <x-primary-button class="my-2">
                            {{ __('Sign In') }}
                        </x-primary-button>
                        <x-secondary-button class="my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="me-3 w-5 h-5">
                                <path
                                    d="M3.06364 7.50914C4.70909 4.24092 8.09084 2 12 2C14.6954 2 16.959 2.99095 18.6909 4.60455L15.8227 7.47274C14.7864 6.48185 13.4681 5.97727 12 5.97727C9.39542 5.97727 7.19084 7.73637 6.40455 10.1C6.2045 10.7 6.09086 11.3409 6.09086 12C6.09086 12.6591 6.2045 13.3 6.40455 13.9C7.19084 16.2636 9.39542 18.0227 12 18.0227C13.3454 18.0227 14.4909 17.6682 15.3864 17.0682C16.4454 16.3591 17.15 15.3 17.3818 14.05H12V10.1818H21.4181C21.5364 10.8363 21.6 11.5182 21.6 12.2273C21.6 15.2727 20.5091 17.8363 18.6181 19.5773C16.9636 21.1046 14.7 22 12 22C8.09084 22 4.70909 19.7591 3.06364 16.4909C2.38638 15.1409 2 13.6136 2 12C2 10.3864 2.38638 8.85911 3.06364 7.50914Z">
                                </path>
                            </svg>
                            {{ __('Sign In With Google') }}
                        </x-secondary-button>
                    </div>

                    <div class="flex justify-center items-center my-4">
                        <h1 class="me-2 text-gray-600 dark:text-gray-400">{{ __('Dont Have Account?') }}</h1>
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('register') }}">
                            {{ __('Sign Up Here') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
