<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MoviTrack - Watchlist Manager')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-950 via-gray-900 to-red-950 text-gray-100 min-h-screen flex flex-col font-sans antialiased">
    @if (!request()->routeIs('login'))
        <x-navbar :username="$username ?? 'Viewer'" />
    @endif
    <main class="flex-grow flex flex-col justify-center">
        @yield('content')
    </main>
    <x-footer />

</body>
</html>
