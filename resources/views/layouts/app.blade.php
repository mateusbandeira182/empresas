<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body class="h-100 bg-light">
@include('layouts.header-app')
<main id="main">
    <div class="container">
        @isset($message)
            <x-alert-bootstrap5 :message="$message" :type="$type"/>
        @endisset
        {{ $slot }}
    </div>
</main>
</body>
<script src="{{ asset('assets/js/app.js') }}"></script>
@stack('plugins-scripts')
@stack('custom-scripts')
</html>
