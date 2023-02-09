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
<header>
    <nav class="navbar fixed-top py-2 bg-light border-bottom-1">
        <div class="container">
            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main id="main" class="h-100 d-flex align-items-center m-auto">
    <div class="container">
        @isset($message)
            <x-alert-bootstrap5 :message="$message" :type="$type"/>
        @endisset
        {{ $slot }}
    </div>
</main>
</body>
<script src="{{ asset('assets/js/app.js') }}"></script>
</html>
