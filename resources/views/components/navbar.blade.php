@props(['username'])

<nav class="bg-gray-800/90 backdrop-blur border-b border-gray-700/70 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="text-2xl">🎬</span>
            <span class="text-xl font-bold tracking-wider">
                <span class="text-red-600">Movi</span><span class="text-white">Track</span>
            </span>
        </div>

        <div class="flex space-x-6 items-center font-medium text-sm">
            <a href="{{ route('dashboard') }}" class="hover:text-red-400 transition">Dashboard</a>
            <a href="{{ route('pengelolaan') }}" class="hover:text-red-400 transition">Watchlist</a>
            <a href="{{ route('profile') }}" class="hover:text-red-400 transition">Profil ({{ $username }})</a>

            <a href="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow transition">
                Logout
            </a>
        </div>
    </div>
</nav>
