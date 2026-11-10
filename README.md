# MoviTrack - Personal Movie & Anime Watchlist Tracker

**MoviTrack** adalah aplikasi web manajemen daftar tontonan (*watchlist*) film dan anime pribadi yang dibangun menggunakan framework **Laravel (MVC) murni tanpa database**. Seluruh autentikasi, manajemen sesi pengguna, proteksi rute, dan pengolahan data katalog tontonan dikelola secara dinamis memanfaatkan fitur bawaan **Laravel Session** dan struktur controller.

## Login
<img width="1917" height="908" alt="Screenshot 2026-11-10 220534" src="https://github.com/user-attachments/assets/7706c2da-86cd-4fa7-813b-3025f786891f" />

## Dashboard
<img width="1917" height="908" alt="Screenshot 2026-11-10 220552" src="https://github.com/user-attachments/assets/262dc9cb-232d-42f8-b178-02d95c6f97cf" />

## Watchlist
<img width="1917" height="913" alt="Screenshot 2026-11-10 220626" src="https://github.com/user-attachments/assets/98661098-422b-4bb2-96bd-ac8754a24444" />

## Profil
<img width="1917" height="907" alt="Screenshot 2026-11-10 220644" src="https://github.com/user-attachments/assets/8f044c2d-89a2-4a99-b7fa-a780a16da84b" />

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

## 📂 Struktur Utama Project

```text
UTS_PWEB_252410103056/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php
├── public/
│   └── images/
│       └── posters/
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       ├── dashboard.blade.php
│       ├── login.blade.php
│       ├── pengelolaan.blade.php
│       └── profile.blade.php
└── routes/
    └── web.php               
