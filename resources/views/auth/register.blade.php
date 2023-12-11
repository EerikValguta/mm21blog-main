@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-control w-full">
                    <label class="label" for="name">
                        <span class="label-text">{{__('Name')}}</span>
                    </label>
                    <input id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}" required autofocus autocomplete="name" class="input input-bordered w-full @error('name') input-error @enderror"/>

{{--                    <x-text-input id="name" class="input input-bordered w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 form-control w-full">
                    <label class="label" for="email">
                        <span class="label-text">{{__('Email')}}</span>
                    </label>
                    <input id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}"  required autocomplete="username" class="input input-bordered w-full @error('name') input-error @enderror"/>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 form-control w-full">
                    <label class="label" for="password">
                        <span class="label-text">{{__('Password')}}</span>
                    </label>

                    <input id="password" name="password" type="password"   required autocomplete="new-password" class="input input-bordered w-full @error('name') input-error @enderror"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 form-control w-full">
                    <label class="label" for="password_confirmation">
                        <span class="label-text">{{__('Confirm Password')}}</span>
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password"   required autocomplete="new-password" class="input input-bordered w-full @error('name') input-error @enderror"/>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <input type="submit" class="btn btn-primary ml-3" value="{{ __('Register') }}">

                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
