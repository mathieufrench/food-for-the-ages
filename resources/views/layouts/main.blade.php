<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-dark antialiased">
    <main class="container mx-auto">
        @yield('content')
    </main>
</body>
</html>
