@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">

                @if (session('resent'))
                    <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                    <div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-gray-200">
                        {{ __('Verify Your Email Address') }}
                    </div>

                    <div class="flex flex-wrap w-full p-6">
                        <p class="leading-normal">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>

                        <p class="mt-6 leading-normal">
                            {{ __('If you did not receive the email') }}, <a class="text-blue-500 no-underline hover:text-blue-700" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                        </p>

                        <form id="resend-verification-form" method="POST" action="{{ route('verification.send') }}" class="hidden">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
