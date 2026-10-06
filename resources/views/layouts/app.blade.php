<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LaravelApp') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        @include('layouts.navigation')
        <main class="my-4">
            @yield('content')
        </main>
        <footer class="border-top py-3 small">
            {{ config('app.name', 'LaravelApp') }} v{{ config('app.version') }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</body>
</html>
