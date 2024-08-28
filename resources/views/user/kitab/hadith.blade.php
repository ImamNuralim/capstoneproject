@extends('partials.navbar')
@section('hadith')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulumul Hadis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <style>
        html, body {
            margin: 0; /* Menghapus margin default */
            padding: 0; /* Menghapus padding default */
            height: 100%; /* Mengatur tinggi body dan html */
            width: 100%; /* Lebar penuh untuk html dan body */
            overflow-x: hidden; /* Menghindari scroll horizontal */
            background-image:
                      url('/img/background.png');
    background-repeat: repeat-y;
            background-position: center;
        }

        .container1 {

            width: 100%; /* Lebar penuh layar */
            height: 100vh; /* Tinggi penuh layar */
            display: flex; /* Mengatur elemen secara fleksibel */
            flex-direction: column; /* Menyusun elemen secara vertikal */
            align-items: center; /* Memusatkan elemen secara horizontal */
            margin: 0; /* Menghapus margin kontainer */
        }

        .card-container {

            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Spasi antar kartu */
            justify-content: center; /* Pusatkan semua kartu */
            width: 100%; /* Lebar penuh untuk menghindari offset */
            padding: 0; /* Menghapus padding */
            margin: 0; /* Menghapus margin */
            box-sizing: border-box; /* Menghitung padding dalam lebar */
        }

        .card {
            transition: all 0.5s;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            width: 22rem;
        }

        .card:hover {
            background-color: #4299E1;
            color: #fff;
        }

        .card .icon {
            font-size: 3rem;
            color: #4299E1;
        }

        .card:hover .icon,
        .card:hover .card-text {
            color: #fff;
        }

        .card-text {
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container1 mt-4">
        <div id="title" class="grid_judul">
            <h1 class="text-center" style="font-family: 'Sedan', sans-serif;">Ulumul Hadis</h1>
        </div>
        <div class="card-container mt-2">
            <div class="card text-center border-0 p-4">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.musthalah-al-hadits') }}">
                        <h4 class="card-title fw-bold"> Musthalah al-Hadis</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 6h16M7 12h13m-10 6h10" />
                    </svg>
                    </a>

                </div>
            </div>
            <div class="card text-center border-0 p-4">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.sanad-dan-matan') }}">
                        <h4 class="card-title fw-bold">Sanad dan Matan</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M11.5 21H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7m-4 7a3 3 0 1 0 6 0a3 3 0 1 0-6 0m5.2 2.2L22 22" />
                    </svg>
                    </a>

                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.klasifikasi.klasifikasi') }}">
                        <h4 class="card-title fw-bold">Klasifikasi</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2m-8-4h6m-6-4h6" />
                        </g>
                    </svg>
                    </a>

                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.cabang') }}">
                        <h4 class="card-title fw-bold">Cabang-cabang</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 18a2 2 0 1 0 4 0a2 2 0 1 0-4 0M5 6a2 2 0 1 0 4 0a2 2 0 1 0-4 0m10 0a2 2 0 1 0 4 0a2 2 0 1 0-4 0M7 8v8m2 2h6a2 2 0 0 0 2-2v-5"/><path d="m14 14l3-3l3 3"/></g></svg>
                    </a>

                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.kitab-kitab.kitab') }}">
                        <h4 class="card-title fw-bold">Kitab-kitab</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 18V2h16v16zm-4 4V6h2v14h14v2zM8 6h12V4H8z" />
                    </svg>
                    </a>
                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('user.kitab.pilihan') }}">
                        <h4 class="card-title fw-bold">Hadist Pilihan</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M14 20H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h12v5"/><path d="M11 16H6a2 2 0 0 0-2 2m11-2l3-3l3 3m-3-3v9"/></g></svg>
                    </a>
                </div>
            </div>
            <!-- Tambahkan kartu lainnya di sini -->
        </div>
    </div>
</body>
</html>
@stop
