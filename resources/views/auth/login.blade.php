@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-control w-full">
            <label class="label" for="email">
                <span class="label-text">{{__('Email')}}</span>
            </label>

            <input id="email" class="input input-bordered w-full" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 form-control w-full">
            <label class="label" for="password">
                <span class="label-text">{{__('Password')}}</span>
            </label>
            <input id="password" class="input input-bordered w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 form-control">
            <label for="remember_me" class="label justify-start">

                <input id="remember_me" type="checkbox" class="checkbox mr-3" name="remember">
                <span class="label-text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <input type="submit" class="btn btn-primary ml-3" value="{{ __('Log in') }}">


        </div>
    </form>
            </div>
        </div>
    </div>
@endsection
