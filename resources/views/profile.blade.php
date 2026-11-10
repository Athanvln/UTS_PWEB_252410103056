@extends('layouts.app')

@section('title', 'Profil User - MoviTrack')

@section('content')
<div class="max-w-4xl mx-auto my-8 px-4">

    <!-- Alert Notifikasi Sukses -->
    @if (session('success'))
        <div class="mb-6 p-4 bg-emerald-900/60 border border-emerald-500/50 rounded-xl text-emerald-200 text-sm text-center font-medium">
            ✅ {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

        <!-- Profil -->
        <div class="md:col-span-5 bg-gray-800/90 backdrop-blur border border-gray-700/70 p-8 rounded-2xl shadow-2xl text-center flex flex-col items-center justify-center">
            <div class="w-28 h-28 bg-gradient-to-tr from-red-600 to-red-500 text-white rounded-full flex items-center justify-center text-5xl font-black shadow-xl shadow-red-950/50 border-4 border-gray-700 mb-4">
                {{ strtoupper(substr($profileData['username'], 0, 1)) }}
            </div>

            <h3 class="text-2xl font-extrabold text-white">{{ $profileData['username'] }}</h3>
            <span class="inline-block px-3 py-1 bg-red-950/80 border border-red-700/60 text-red-400 text-xs font-semibold rounded-full mt-2">
                {{ $profileData['role'] }}
            </span>

            <p class="text-xs text-gray-400 italic mt-4 text-center px-4">
                "{{ $profileData['bio'] }}"
            </p>

            <div class="w-full border-t border-gray-700/60 mt-6 pt-6 space-y-3 text-xs text-left">
                <div class="flex justify-between items-center">
                    <span class="text-gray-400">Bergabung Sejak</span>
                    <span class="font-medium text-gray-200">{{ $profileData['join_date'] }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400">Genre Favorit</span>
                    <span class="font-semibold text-red-400">{{ $profileData['favorite_genre'] }}</span>
                </div>
            </div>
        </div>

        <!-- Form Edit Profil -->
        <div class="md:col-span-7 bg-gray-800/90 backdrop-blur border border-gray-700/70 p-8 rounded-2xl shadow-2xl flex flex-col justify-center">
            <h3 class="text-xl font-bold text-white mb-2">Edit Informasi Profil</h3>
            <p class="text-xs text-gray-400 mb-6">Ubah detail akun secara langsung (Disimpan via Session Laravel).</p>

            <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="username" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                        Username
                    </label>
                    <input type="text" id="username" name="username" value="{{ $profileData['username'] }}" required
                           class="w-full px-4 py-3 bg-gray-950/80 border border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none text-sm">
                </div>

                <div>
                    <label for="favorite_genre" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                        Genre Favorit
                    </label>
                    <input type="text" id="favorite_genre" name="favorite_genre" value="{{ $profileData['favorite_genre'] }}" required
                           class="w-full px-4 py-3 bg-gray-950/80 border border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none text-sm">
                </div>

                <div>
                    <label for="bio" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                        Bio
                    </label>
                    <textarea id="bio" name="bio" rows="3" required
                              class="w-full px-4 py-3 bg-gray-950/80 border border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none text-sm">{{ $profileData['bio'] }}</textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-semibold py-3 rounded-xl shadow-lg shadow-red-900/40 transition duration-200">
                    Simpan Perubahan
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
