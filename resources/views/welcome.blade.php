<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Nunito:300,400,500,600,700&display=swap">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none bg-gray-100">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-6 mr-12">
            @auth
                <a href="{{ url('/app') }}" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Go to App') }}</a>
            @else
                <a href="{{ route('login') }}" class="pr-6 text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-12 text-5xl font-light tracking-wider text-center text-gray-600">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="list-reset">
                    <li class="inline pr-8">
                        <a href="https://laravel.com/docs" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="Documentation">Documentation</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://laracasts.com" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="Laracasts">Laracasts</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://laravel-news.com" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="News">News</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://nova.laravel.com" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="Nova">Nova</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://forge.laravel.com" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="Forge">Forge</a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://github.com/laravel/laravel" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline" title="GitHub">GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
