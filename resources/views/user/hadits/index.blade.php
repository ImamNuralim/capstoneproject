@extends('partials.navbar')
@section('kitab')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Hadith Data</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <style>
            .header-hadits {
                padding-top: 10px;
                text-align: center;
                font-family: montserrat;
                color: #0255A1;
                font-size: 30px;
            }

            .pill {
                justify-items: center;
                height: 100px;
                width: 500px;
                px;
                border: 2px solid #0255A1;
                border-top-left-radius: 50px;
                /* 50% of height */
                border-bottom-left-radius: 50px;
                /* 50% of height */

                border-top-right-radius: 50px;
                border-bottom-right-radius: 50px;
            }



            .container-1 {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                flex-wrap: wrap;
                /* Mengizinkan pembungkus konten */
            }



            .button {
                display: inline-block;
                opacity: 70%;
                background-color: #0054af;
                color: #fff;
                padding: 10px 20px;
                border-radius: 20px;
                text-decoration: none;
            }

            .button:hover {
                background-color: #0065c4;
            }


        </style>


        {{-- untuk background --}}

        <div class="container mt-4">
            <div class="card">
                <div class="card">
                    <h4 class="text-center">Jadwal Sholat</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Semarang
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center imsak">
                            Imsak
                            <span class="badge text-bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center subuh">
                            Subuh
                            <span class="badge text-bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center dzuhur">
                            Dzuhur
                            <span class="badge text-bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ashar">
                            Ashar
                            <span class="badge text-bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center maghrib">
                            Maghrib
                            <span class="badge text-bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center isya">
                            Isya
                            <span class="badge text-bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- card buttonm kitab --}}



        @if (isset($hadithData))
            <h>Hadith Data</h>
            <div class="card-body">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Arabic Text</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hadithData['data']['hadiths'] as $hadith)
                            <tr>
                                <td>{{ $hadith['number'] }}</td>
                                <td>{{ $hadith['arab'] }}</td>
                                <td>{{ $hadith['id'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>{{ $error ?? 'No data available' }}</p>
        @endif




        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        <script src="js/script.js"></script>
    </body>


    </html>

@stop
