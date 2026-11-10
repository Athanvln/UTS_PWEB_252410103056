@extends('layouts.app')

@section('title', 'Katalog Watchlist - MoviTrack')

@section('content')
<div class="max-w-6xl mx-auto px-4 my-6">
    <div class="bg-gray-900/80 backdrop-blur-md p-6 rounded-2xl border border-gray-700/60 shadow-2xl space-y-5">

        <!-- Header Halaman -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center border-b border-gray-700/60 pb-4 gap-2">
            <div>
                <h2 class="text-2xl font-bold text-white flex items-center space-x-2">
                    <span>Watchlist Kamu</span>
                </h2>
                <p class="text-xs text-gray-400 mt-1">Daftar film & anime </p>
            </div>
            <div class="px-3 py-1.5 bg-gray-800 border border-gray-700 rounded-lg text-xs text-gray-300">
                Viewer Active: <strong class="text-red-500 font-semibold">{{ $username }}</strong>
            </div>
        </div>

        <!-- Tabel Watchlist -->
        <div class="overflow-x-auto rounded-xl border border-gray-800">
            <table class="w-full text-left text-sm text-gray-300">
                <thead class="bg-gray-950 text-gray-400 uppercase text-[11px] tracking-wider">
                    <tr>
                        <th class="p-4 border-b border-gray-800 text-center">No</th>
                        <th class="p-4 border-b border-gray-800">Judul Tontonan</th>
                        <th class="p-4 border-b border-gray-800">Tipe</th>
                        <th class="p-4 border-b border-gray-800">Genre</th>
                        <th class="p-4 border-b border-gray-800">Tahun</th>
                        <th class="p-4 border-b border-gray-800">Rating</th>
                        <th class="p-4 border-b border-gray-800">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800 bg-gray-900/50">
                    @foreach ($watchlist as $item)
                    <tr class="hover:bg-gray-800/60 transition group">
                        <td class="p-4 font-mono text-xs text-gray-500 text-center">{{ $item['id'] }}</td>
                        <td class="p-4 flex items-center space-x-3">
                            <img src="{{ $item['poster'] }}" alt="{{ $item['judul'] }}"
                                 referrerpolicy="no-referrer"
                                 class="w-10 h-14 object-cover rounded-md shadow-md border border-gray-700 group-hover:scale-105 transition-transform"
                                 onerror="this.src='https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=200&auto=format&fit=crop&q=80'">
                            <div>
                                <h4 class="font-bold text-white text-sm group-hover:text-red-400 transition">{{ $item['judul'] }}</h4>
                            </div>
                        </td>

                        <td class="p-4 text-xs font-medium text-gray-300">{{ $item['tipe'] }}</td>
                        <td class="p-4 text-xs text-gray-400">{{ $item['genre'] }}</td>
                        <td class="p-4 text-xs font-mono">{{ $item['tahun'] }}</td>
                        <td class="p-4 font-semibold text-yellow-400 text-xs">⭐ {{ $item['rating'] }}</td>

                        <!-- Badges Status -->
                        <td class="p-4 text-xs">
                            @if ($item['status'] == 'Completed')
                                <span class="px-2.5 py-1 rounded-full bg-emerald-950/80 border border-emerald-700/60 text-emerald-300 font-semibold text-[11px]">
                                    ✓ Completed
                                </span>
                            @elseif (str_contains($item['status'], 'Watching'))
                                <span class="px-2.5 py-1 rounded-full bg-blue-950/80 border border-blue-700/60 text-blue-300 font-semibold text-[11px]">
                                    ▶ {{ $item['status'] }}
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-gray-800 border border-gray-700 text-gray-400 font-semibold text-[11px]">
                                    📌 {{ $item['status'] }}
                                </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
