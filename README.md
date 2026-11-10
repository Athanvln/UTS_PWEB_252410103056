# MoviTrack - Personal Movie & Anime Watchlist Tracker

**MoviTrack** adalah aplikasi web manajemen daftar tontonan (*watchlist*) film dan anime pribadi yang dibangun menggunakan framework **Laravel (MVC) murni tanpa database**. Seluruh autentikasi, manajemen sesi pengguna, proteksi rute, dan pengolahan data katalog tontonan dikelola secara dinamis memanfaatkan fitur bawaan **Laravel Session** dan struktur controller.

# Fitur Utama

- **Autentikasi & Manajemen Sesi:** Login akun sederhana dengan proteksi sesi (*session guard*) untuk mencegah akses ilegal via bypass URL.
- **Proteksi Rute Ketat:** Rute aplikasi utama (Dashboard, Watchlist, Profile) dilindungi oleh middleware `web` dan pemeriksaan status login yang ketat.
- **Katalog Watchlist Dinamis:** Menampilkan 10 daftar film dan anime favorit lengkap dengan rincian tipe, genre, tahun rilis, rating, status tontonan, serta poster visual lokal.
- **Profil Pengguna Interaktif:** Halaman profil yang menampilkan data pengguna secara dinamis dan menyediakan fitur pembaruan profil yang tersimpan dalam session.
- **Desain Modern & Responsif:** Antarmuka intuitif bergaya *dark mode* menggunakan Tailwind CSS dengan navigasi header dan footer modular.

## Teknologi yang Digunakan
- **Framework Backend:** Laravel 
- **Bahasa Pemrograman:** PHP 8.3
- **Templating Engine:** Laravel Blade (`@extends`, `@section`, `@yield`, `@foreach`, `@if`)
- **Frontend & Styling:** [Tailwind CSS](https://tailwindcss.com/) (via CDN)
- **Manajemen Sesi:** Native File-based Session Driver (`SESSION_DRIVER=file`)
