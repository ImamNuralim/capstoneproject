<style>
    .gradient2{
      background-image: #ffffff
    }
  </style>
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
      {{-- Bootstrap Icons --}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
      
      {{-- My Style --}}
      <link rel="stylesheet" href="/css/style.css">
  
      {{-- Carousel News --}}
      
      {{-- Title --}}
      <title>Perhutani KPH Kendal</title>
      <link rel="icon" href="/img/logoTSII.png" type="image/x-icon">
    </head>
    <body class="d-flex flex-column min-vh-100 gradient2">
      @include('partials.navbar')
        <div class="container">
          @yield('container')
      </div>
  
      {{-- @if ($active === 'homepage' || $active === 'laporans')
      @endif --}}
      {{-- @include('partials.footer') --}}
      
  
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
      @yield('footer')
    </body>
  </html>
  