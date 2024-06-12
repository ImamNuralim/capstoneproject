@extends('partials.navbar')
@section('surah')


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">

    <title>Belajar Ngaji</title>

    <!-- box-icon -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo center">
          <img src="./img/logo2.png">
        </a>
        <a href="index.html" data-target="nav-mobile" class="sidenav-trigger right">
          <i class="material-icons">chevron_left</i>
        </a>
      </div>
    </nav>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center">Al-Quran</h1>
          <div class="row center">
            <h5 class="header col s12 light z-depth-5">Ayo mulai mengaji</h5>
          </div>

        </div>
      </div>
      <div class="parallax"><img src="./img/muslims-reading-from-quran.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="container">
      <div class="section">
        <!--   Icon Section   -->
        <div class="row">
          <main class="alquran">
            <table class="striped date-text">
              <tbody id="list" class="list-alquran"></tbody>
            </table>
          </main>
        </div>
      </div>
    </div>

    <footer class="page-footer center">
      <div class="container">
        <div class="row">
          <div class="icon-sosial">
            <a href="mailto:awahid.safhadi@gmail.com" class="btn-floating tooltipped teal darken-3" data-position="top" data-tooltip="email">
                <i class="material-icons">mail_outline</i>
            </a>
            <a href="https://twitter.com/awahids_" class="btn-floating tooltipped blue darken-2" data-position="top" data-tooltip="twitter">
                <i class='bx bxl-twitter'></i>
            </a>
            <a href="https://github.com/awahids" class="btn-floating tooltipped green darken-3" data-position="top" data-tooltip="github">
                <i class='bx bxl-github'></i>
            </a>
            <a href="https://www.linkedin.com/in/awahids/" class="btn-floating tooltipped yellow darken-3" data-position="top" data-tooltip="linked in">
                <i class='bx bxl-linkedin'></i>
            </a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Made with
          <svg width="13" height="10" viewBox="0 0 100 100">
          <path fill="red" d="M92.71,7.27L92.71,7.27c-9.71-9.69-25.46-9.69-35.18,0L50,14.79l-7.54-7.52C32.75-2.42,17-2.42,7.29,7.27v0 c-9.71,9.69-9.71,25.41,0,35.1L50,85l42.71-42.63C102.43,32.68,102.43,16.96,92.71,7.27z"></path>
          <animateTransform
            attributeName="transform"
            type="scale"
            values="1; 1.5; 1.25; 1.5; 1.5; 1;"
            dur="1s"
            repeatCount="indefinite">
          </animateTransform>
          </svg>
          by <a class="brown-text text-lighten-3" href="#">Awahid Safhadi</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/storage.js') }}"></script>

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
          direction: 'top'
        });
      });
    </script>

    <!-- tooltipped -->
    <script>
      quranPage();
    </script>

    <script>
      $(document).ready(function(){
        $('.tooltipped').tooltip();
      });
    </script>
  </body>
</html>

   {{-- <head>
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
            </div>


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

    </html> --}}

@stop
