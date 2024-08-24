@extends('partials.navbar')
@section('hadith')
    <style>
        .card .icon {
            font-size: 3rem;
            color: #4299E1;
        }

        .card-text {
            color: gray;
        }

        .card {
            transition: all 0.5s;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            width: 22rem;
            /* Lebar tetap setiap card */
        }

        .card:hover {
            background-color: #4299E1;
            color: #fff;
        }

        .card:hover .icon,
        .card:hover .card-text {
            color: #fff;
        }

        /* Atur card menjadi grid horizontal dan di tengah */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            /* Membuat kartu turun ke bawah jika layar tidak cukup */
            gap: 20px;
            /* Spasi antar kartu */
            justify-content: center;
            /* Pusatkan semua kartu */
        }
    </style>

    <div class="container mt-5">
        <div id="title" class="grid_judul">
            <h2 class="text-center">Ulumul Hadis</h2>
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
                    <a href="{{ route('user.kitab.klasifikasi') }}">
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
                    <a href=""></a>
                    <h4 class="card-title fw-bold">Cabang-cabang</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 18V2h16v16zm-4 4V6h2v14h14v2zM8 6h12V4H8z" />
                    </svg>
                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href=""></a>
                    <h4 class="card-title fw-bold">Kitab-kitab</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9 3v15h3V3zm3 2l4 13l3-1l-4-13zM5 5v13h3V5zM3 19v2h18v-2z" />
                    </svg>
                </div>
            </div>
            <div class="card text-center border-0 p-4" style="max-width: 22rem;">
                <div class="icon">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                </div>
                <div class="card-body">
                    <a href=""></a>
                    <h4 class="card-title fw-bold">Hadits Pilihan</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                    </svg>
                </div>
            </div>
            <!-- Tambahkan kartu lainnya di sini -->
        </div>
</div>

@stop
