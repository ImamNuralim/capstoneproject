@extends('partials.navbar')
@section('surah')

   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Read-AlQuran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        .main {
            max-width: 1200px;
            margin: 0px auto;
            margin-top: 70px;
        }

        .card {
            width: 330px;
            margin: 10px;
        }

        .verse {
            text-align: right;
            font-size: 22px;
            padding-top: 5px;
        }

        @media screen and (max-width: 640px) {
            .card {
                width: 100%;
                margin: 0px 10px;
                margin-top: 10px;
            }
        }
    </style>

    <body>
        <main>
            <div class="py-2 mt-4 mb-2 d-flex justify-content-center flex-wrap" id="container">
                <!-- Display Surah Lists here -->
            </div>

            <!-- Display Single Surah data here -->
            <div class="px-3 pb-4" style="max-width: 700px; margin: auto;">
                <div class="d-flex justify-content-between px-2">
                    <h6><span id="nama_latin"></span></h6>
                    <h6 id="nama"></h6>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <h6 id="tempat_turun"></h6>
                    <h6 id="arti"></h6>
                </div>
                <div class="card w-100 mx-0">
                    <ul class="list-group list-group-flush" id="surah">
                        <!-- Display Single Surah verses here -->
                    </ul>
                </div>
            </div>

            <div class="position-absolute top-50 start-50 translate-middle" id="loader" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </main>

        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    </body>

    </html>

@stop
