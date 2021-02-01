<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}@hasSection('title'){{ ' - ' }}@yield('title')@endif</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Nunito:300,400,500,600,700&display=swap">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none bg-gray-100">
    <div id="main">
        <app :user="'{{ Auth::user() }}'" :app-name="'{{ config('app.name', 'Laravel') }}'"></app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
