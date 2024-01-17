<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-dark antialiased">
    <header class="bg-gray-800 py-4 px-6 flex items-center justify-between">
        <h1 class="text-2xl text-white font-bold">Matt French Demo</h1>
        <nav class="flex items-center">
            </nav>
    </header>

    <main class="container mx-auto px-4 mt-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-4 px-6 text-white">
        <div class="container mx-auto flex items-center justify-between">
            <p class="text-sm">&copy; {{ date('Y') }} Matt French</p>
            <div class="flex items-center">
                </div>
        </div>
    </footer>
</body>
</html>
