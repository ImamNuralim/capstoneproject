@extends('partials.navbar')
@section('detail')

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo center">
          <img src="./img/logo2.png">
        </a>
        <!-- <ul class="right hide-on-med-and-down">
          <li><a href="#service">Service</a></li>
          <li><a href="#about">About Us</a></li>
        </ul> -->

        <!-- <ul id="nav-mobile" class="sidenav">
          <li class="active"><a href="hijaiyah.html"><i class="material-icons">spellcheck</i>Huruf Hijaiyah</a></li>
          <li><a href="nulis.html"><i class="material-icons">edit</i>Nulis Hijaiyah</a></li>
        </ul> -->
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
          <!-- <div class="center">
            <p>pilih surat</p>
          </div> -->
        </div>
      </div>
      <div class="parallax"><img src="./img/muslims-reading-from-quran.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="container">
      <div class="section">
        <!--   Icon Section   -->
        <div class="row">
          <div class="white-text">
            <div class="list-audio" style="display: none;"></div>

            <ul class="ayat" id="list-ayah"></ul>
          </div>
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

    <!-- <div class="fixed-action-btn">
      <a class="btn-floating btn-large tooltipped red pulse" data-position="left" data-tooltip="contact us">
        <i class='bx bxs-contact'></i>
      </a>
      <ul>
        <li>
          <a href="mailto:awahid.safhadi@gmail.com" class="btn-floating tooltipped teal" data-position="left" data-tooltip="email">
            <i class="material-icons">mail_outline</i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/awahids/" class="btn-floating tooltipped yellow darken-1" data-position="left" data-tooltip="linked in">
            <i class='bx bxl-linkedin'></i>
          </a>
        </li>
        <li>
          <a href="https://github.com/awahids" class="btn-floating tooltipped green" data-position="left" data-tooltip="github">
            <i class='bx bxl-github'></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/awahids_" class="btn-floating tooltipped blue" data-position="left" data-tooltip="twitter">
            <i class='bx bxl-twitter'></i>
          </a>
        </li>
      </ul>
    </div> -->

    <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/storage.js"></script>

    <!-- floating -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, {
                direction: 'top'
            });
        });
    </script> -->

    <!-- tooltipped -->
    <script>
      surahPage();
    </script>

    <script>
      $(document).ready(function(){
        $('.tooltipped').tooltip();
      });
    </script>
  </body>
</html>


@stop
