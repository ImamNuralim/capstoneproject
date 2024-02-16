{{-- <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<nav class="navbar fixed-top navbar-expand-lg navbar-light gradient shadow" >

  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="https://www.perhutani.co.id/wp-content/themes/perhutani2022/assets/images/logo.png" alt="" style="width: 80%" >
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav mx-auto" >

          </li>
          <li class="nav-item" id="nav-item-1" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" style="margin-right: 25px;">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" style="font-size: 18px; font-weight: 600" >Home</a>
          </li>
          <li class="nav-item" id="nav-item-1" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" style="margin-right: 25px;">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" style="font-size: 18px; font-weight: 600" >Home</a>
          </li>
          <li class="nav-item" id="nav-item-2" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" style="margin-right: 25px;">
            <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category" style="font-size: 18px; font-weight: 600;">Laporan</a>
          </li>
          <li class="nav-item" id="nav-item-3" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" >
            <a class="nav-link {{ Request::is('tentang*') ? 'active' : '' }}" href="/tentang" style="font-size: 18px; font-weight: 600">Tentang Kami</a>
          </li>
          </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="bg-success rounded nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px; font-weight: 400; color: white">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <li><a class="dropdown-item" href="/dashboard/"><i class="bi bi-layout-text-window-reverse" ></i> Dashboard </a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="bi bi-box-arrow-right"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a class="btn btn-outline-success {{ Request::is('login*') ? 'active' : '' }}" href="/login" role="button" style="font-size: 18px; font-weight: 600">Login<i class="bi bi-box-arrow-in-right"></i></a>
          </li>
        @endauth
        </ul>
      </div>
  </div>
</nav>

<style>
  .gradient{
    background-color: #FFFFFF
  }
</style>

<script>
    function addUnderline(elementId) {
        var element = document.getElementById(elementId);
        element.style.borderBottom = "3px solid black";
    }

    function removeUnderline(elementId) {
        var element = document.getElementById(elementId);
        element.style.borderBottom = "none";
    }
</script> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=".">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? 'Luora' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    </head>
    <body>
        <div class="page">
            <header class="navbar navbar-expand-md navbar-light d-print-none">
              <div class="container-xl">
                <h1 class="navbar-brand text-danger navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{ route('home') }}">
                        Teras Ilmu Center
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    @guest
                        <div class="nav-item d-none d-md-flex me-3">
                            <div class="btn-list">
                                <a wire:navigate href="{{ route('login') }}" wire:navigate class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('login') ? 'active' : '' }}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>
                                    Sign in
                                </a>
                                <a wire:navigate href="{{ route('register') }}" wire:navigate class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('register') ? 'active' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                    Sign up
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="nav-item d-none d-md-flex me-2">
                            <div class="btn-list me-2">
                                <a href="{{ route('home') }}" class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('home') ? 'active' : ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                     </svg>
                                    Home
                                </a>
                                <a href="#" class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('appearance.index') ? 'active' : ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 6l11 0"></path>
                                        <path d="M9 12l11 0"></path>
                                        <path d="M9 18l11 0"></path>
                                        <path d="M5 6l0 .01"></path>
                                        <path d="M5 12l0 .01"></path>
                                        <path d="M5 18l0 .01"></path>
                                    </svg>
                                    Following
                                </a>
                                <a href="{{ route('answer.index') }}" class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('answer.index') ? 'active' : ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                        <path d="M16 5l3 3"></path>
                                     </svg>
                                    Answer
                                </a>
                                <a href="#" class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('appearance.index') ? 'active' : ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                                        <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                                        <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                                     </svg>
                                    Spaces
                                </a>
                                <a href="#" class="btn btn-outline-danger border-danger btn-pill {{ request()->route()->named('appearance.index') ? 'active' : ''}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                     </svg>
                                    Notifications
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a id="dropdown" href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                                <span class="avatar avatar-sm rounded-circle" style="background-image: url(@if(auth()->user()->image == null) 'https://ui-avatars.com/api/?name={{ auth()->user()->username }}&background=DE6060&color=fff&rounded=true&size=112' @else {{ asset('storage/' . auth()->user()->image) }} @endif)"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a target="_blank" class="dropdown-item text-dark" href="{{ route('profile.index', auth()->user()->username_slug) }}">
                                    {{ auth()->user()->username }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('stats.index') }}">
                                    Your content & stats
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    Settings
                                </a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('signout-form').submit();" class="dropdown-item">
                                    Sign out
                                </a>
                                <form id="signout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
              </div>
            </header>

            <div class="page-wrapper">
                <div class="container">
                    {{ $slot ?? null}}
                    @yield('main')
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script type="text/javascript">

            window.addEventListener('toastify', function(e){
                Toastify({
                    text: e.detail.text,
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: e.detail.background
                    }
                }).showToast();
            });

            window.onscroll = function(ev){
                if((window.innerHeight + window.scrollY) >= document.body.offsetHeight){
                    Livewire.dispatch('increase-limit');
                }
            }
        </script>
    </body>
</html>
