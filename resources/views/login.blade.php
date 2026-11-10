@extends('layouts.app')

@section('title', 'Login - MoviTrack')

@section('content')
<div class="min-h-[calc(100vh-160px)] flex items-center justify-center py-6 px-4 relative">

    <div class="absolute inset-0 overflow-hidden pointer-events-none flex justify-center items-center">
        <div class="w-[600px] h-[600px] bg-red-600/15 rounded-full blur-3xl transform -translate-y-10"></div>
    </div>

    <div class="w-full max-w-md bg-gray-900/80 backdrop-blur-md border border-gray-700/60 rounded-2xl shadow-2xl p-8 relative z-10">

        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center space-x-2 mb-3">
                <span class="text-3xl">🎬</span>
                <h1 class="text-3xl font-extrabold tracking-wider">
                    <span class="text-red-600">Movi</span><span class="text-white">Track</span>
                </h1>
            </div>
            <h2 class="text-xl font-bold text-white">Selamat Datang Kembali</h2>
            <p class="text-xs text-gray-400 mt-1">Kelola watchlist film favoritmu</p>
        </div>

        <!-- Notifikasi Alert -->
        @if (session('error'))
            <div class="mb-4 p-3 bg-red-900/50 border border-red-500/50 rounded-xl text-red-200 text-xs text-center font-medium">
                ⚠️ {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="mb-4 p-3 bg-emerald-900/50 border border-emerald-500/50 rounded-xl text-emerald-200 text-xs text-center font-medium">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="username" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                    Username
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-500">
                        👤
                    </span>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required
                           class="w-full pl-10 pr-4 py-3 bg-gray-950/80 border border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:outline-none text-sm placeholder-gray-500 transition">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                    Password
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-500">
                        🔒
                    </span>
                    <input type="password" id="password" name="password" placeholder="Masukkan password " required
                           class="w-full pl-10 pr-4 py-3 bg-gray-950/80 border border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:outline-none text-sm placeholder-gray-500 transition">
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-semibold py-3 rounded-xl shadow-lg shadow-red-900/40 transition duration-200 flex items-center justify-center space-x-2 group mt-2">
                <span>Masuk</span>
                <span class="group-hover:translate-x-1 transition-transform duration-150">&rarr;</span>
            </button>
        </form>

    </div>
</div>
@endsection
