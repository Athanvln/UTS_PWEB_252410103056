@extends('layouts.app')

@section('title', 'Dashboard - Movitrack')

@section('content')
<div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-xl space-y-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between border-b border-gray-700 pb-4 gap-2">
        <div>
            <h2 class="text-2xl font-bold text-white">Selamat Datang, {{ $username }}!</h2>
            <p class="text-sm text-gray-400">Ringkasan aktivitas tontonan film kamu saat ini.</p>
        </div>
        <span class="inline-block px-3 py-1 bg-red-900/50 border border-red-700 text-red-300 text-xs font-semibold rounded-full w-fit">
            Status: Active
        </span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-5 bg-gray-900/70 rounded-lg border border-gray-700 hover:border-red-500/50 transition">
            <h3 class="font-bold text-lg text-red-400 mb-2"> Watchlist Tracker</h3>
            <p class="text-xs text-gray-400 mb-4">Lihat katalog tontonan yang sedang kamu ikuti atau rencanakan.</p>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="inline-block bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded transition">
                Buka Watchlist &rarr;
            </a>
        </div>

        <div class="p-5 bg-gray-900/70 rounded-lg border border-gray-700 hover:border-gray-600 transition">
            <h3 class="font-bold text-lg text-gray-200 mb-2">Profil Akun</h3>
            <p class="text-xs text-gray-400 mb-4">Lihat informasi profil akun kamu.</p>
            <a href="{{ route('profile', ['username' => $username]) }}" class="inline-block bg-gray-700 hover:bg-gray-600 text-white text-xs font-semibold px-4 py-2 rounded transition">
                Lihat Profil &rarr;
            </a>
        </div>
    </div>
</div>
@endsection
