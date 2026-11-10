<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $validUser = 'atha';
        $validPass = 'misshikari';

        if ($username === $validUser && $password === $validPass) {
            session([
                'username' => $username,
                'is_logged_in' => true,
                'favorite_genre' => 'Sci-Fi & Action',
                'bio' => 'Movie & Anime Enthusiast'
            ]);

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah! silahkan coba lagi.');
    }

    public function showDashboard(Request $request)
    {
        // Proteksi
        if (!session()->has('is_logged_in') || session('is_logged_in') !== true) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = session('username');
        return view('dashboard', compact('username'));
    }

    public function showPengelolaan(Request $request)
    {
        // Proteksi
        if (!session()->has('is_logged_in') || session('is_logged_in') !== true) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = session('username');

        // 10 Data dummy watchlist + Poster
        $watchlist = [
            [
                'id' => 1,
                'judul' => 'Breaking Bad',
                'tipe' => 'TV Series',
                'genre' => 'Crime / Drama',
                'rating' => '9.5/10',
                'status' => 'Watching (Season 3)',
                'tahun' => 2008,
                'poster' => asset('images/posters/Breaking-Bad.jpg')
            ],
            [
                'id' => 2,
                'judul' => 'The Mentalist',
                'tipe' => 'TV Series',
                'genre' => 'Crime / Mystery',
                'rating' => '8.2/10',
                'status' => 'Watching (Season 1 Ep 15)',
                'tahun' => 2008,
                'poster' => asset('images/posters/The-Mentalist.jpg')
            ],
            [
                'id' => 3,
                'judul' => '12 Angry Men',
                'tipe' => 'Movie',
                'genre' => 'Crime / Drama',
                'rating' => '9.0/10',
                'status' => 'Completed',
                'tahun' => 1957,
                'poster' => asset('images/posters/12-Angry-Men.jpg')
            ],
            [
                'id' => 4,
                'judul' => 'Ranma ½',
                'tipe' => 'Anime Series',
                'genre' => 'Comedy / Martial Arts',
                'rating' => '7.9/10',
                'status' => 'Completed',
                'tahun' => 1989,
                'poster' => asset('images/posters/Ranma.jpg')
            ],
            [
                'id' => 5,
                'judul' => 'Kimi no Na wa (Your Name)',
                'tipe' => 'Anime Movie',
                'genre' => 'Romance / Fantasy',
                'rating' => '8.4/10',
                'status' => 'Completed',
                'tahun' => 2016,
                'poster' => asset('images/posters/Your-Name.jpg')
            ],
            [
                'id' => 6,
                'judul' => 'A Silent Voice',
                'tipe' => 'Anime Movie',
                'genre' => 'Drama / Romance',
                'rating' => '8.1/10',
                'status' => 'Completed',
                'tahun' => 2016,
                'poster' => asset('images/posters/a-silent-voice.jpg')
            ],
            [
                'id' => 7,
                'judul' => 'The Truman Show',
                'tipe' => 'Movie',
                'genre' => 'Comedy / Drama',
                'rating' => '8.2/10',
                'status' => 'Completed',
                'tahun' => 1998,
                'poster' => asset('images/posters/The-Truman-Show.jpg')
            ],
            [
                'id' => 8,
                'judul' => 'Boku no Hero Academia',
                'tipe' => 'Anime Series',
                'genre' => 'Action / Sci-Fi',
                'rating' => '8.3/10',
                'status' => 'Completed',
                'tahun' => 2016,
                'poster' => asset('images/posters/My-Hero-Academia.jpg')
            ],
            [
                'id' => 9,
                'judul' => 'Code Geass',
                'tipe' => 'Anime Series',
                'genre' => 'Action / Mecha',
                'rating' => '8.7/10',
                'status' => 'Completed',
                'tahun' => 2006,
                'poster' => asset('images/posters/Code-Geass.jpg')
            ],
            [
                'id' => 10,
                'judul' => 'Forrest Gump',
                'tipe' => 'Movie',
                'genre' => 'Drama / Romance',
                'rating' => '8.8/10',
                'status' => 'Plan to Watch',
                'tahun' => 1994,
                'poster' => asset('images/posters/Forrest-Gump.jpg')
            ],
        ];

        return view('pengelolaan', compact('username', 'watchlist'));
    }

    public function showProfile(Request $request)
    {
        // Proteksi
        if (!session()->has('is_logged_in') || session('is_logged_in') !== true) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $username = session('username');

        $profileData = [
            'username' => $username,
            'role' => 'MoviTrack Pro Member',
            'join_date' => 'November 2026',
            'favorite_genre' => session('favorite_genre', 'Sci-Fi & Action'),
            'bio' => session('bio', 'Movie & Anime Enthusiast')
        ];

        return view('profile', compact('username', 'profileData'));
    }

    public function updateProfile(Request $request)
    {
        // Proteksi
        if (!session()->has('is_logged_in') || session('is_logged_in') !== true) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        $newUsername = $request->input('username');
        $newGenre = $request->input('favorite_genre');
        $newBio = $request->input('bio');

        session([
            'username' => $newUsername,
            'favorite_genre' => $newGenre,
            'bio' => $newBio
        ]);

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login')->with('error', 'Anda telah logout.');
    }
}
