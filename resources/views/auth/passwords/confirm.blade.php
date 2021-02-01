@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-gray-200">
                        {{ __('Confirm Password') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <p class="leading-normal">
                            {{ __('Please confirm your password before continuing.') }}
                        </p>

                        <div class="flex flex-wrap my-6">
                            <label for="password" class="block mb-2 text-sm font-bold text-gray-700">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="px-4 py-2 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-blue-700" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
