@extends('website.layout')

@section('title', 'Confirm Password')

@section('content')
    <section class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-32 md:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex flex-col justify-center items-center my-6">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                    <div class="flex flex-col justify-center items-center gap-2 w-10/12 my-2">
                        <h1 class="text-2xl font-bold text-black dark:text-white">Confirm Password</h1>
                        <p class="text-base text-center font-medium text-black dark:text-white">Enter your email address to
                            receive a link to reset your password.</p>
                    </div>
                </div>
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-primary-button>
                            {{ __('Confirm') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
