<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login TIC</title>
    <link rel="shortcut icon" type="image/png" href="../img/logoTSII.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>
<style>
    .card-body{
        margin-top: -50px;
    }
    .page-wrapper{
        background-color:#699ce82c;
    }
    .logo{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }
</style>
<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand text-info navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a class="logo" href="{{ route('home') }}">
                Teras Ilmu Center
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            @guest
                <div class="nav-item d-none d-md-flex me-3">
                    <div class="btn-list">
                        <a wire:navigate href="{{ route('auth.login') }}" wire:navigate
                            class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('login') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                </path>
                                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                            </svg>
                            Log in
                        </a>
                        <a wire:navigate href="{{ route('auth.register') }}" wire:navigate
                            class="btn btn-outline-info border-info btn-pill {{ request()->route()->named('register') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
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
                {{-- <div class="nav-item dropdown">
                    <a id="userDropdown" class="nav-link d-flex lh-1 text-reset p-0" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user()->image)
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                style="background-image: url(data:image/png;base64,{{ base64_encode(Auth::user()->image) }});
                                object-fit: fill;
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: center;
                                width: 35px;
                                height: 35px;
                                border-radius: 50%;
                                overflow: hidden;
                                opacity: 1;
                                display: inline-flex;
                                vertical-align: middle;">
                            </figure>
                        @else
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                            data-initial="{{ Auth::user()->name[0] }}"
                                style="background-image: url('https://ui-avatars.com/api/?name={{ Auth::user()->name[0] }}&background=DE6060&color=fff&rounded=true&size=112');
                                object-fit: fill;
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: center;
                                width: 35px;
                                height: 35px;
                                border-radius: 50%;
                                overflow: hidden;
                                opacity: 1;
                                display: inline-flex;
                                vertical-align: middle;">
                            </figure>
                        @endif

                        <span class="ml-3 mr-2 d-none d-lg-inline text-gray-600 small"
                            style="margin-left: 5% !important; color: #ffffff !important; margin-right: 0% !important; font-size: 14px;">
                            {{ auth()->user()->username }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" aria-labelledby="userDropdown">
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
                        <form id="signout-form" action="{{ route('logout') }}" method="POST" class="d-block">
                            @csrf
                        </form>
                    </div>
                </div> --}}

            @endguest
        </div>
    </div>
</header>

  <body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="../img/logoTSII.png" width="180" alt="">
                  </a>
                  <p class="text-center"><b>Gabung Dengan Kami!</b></p>
                  <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexCheckChecked">
                          Remeber this Device
                        </label>
                      </div>
                      <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-2 mb-0 fw-bold">Baru Menggunakan TIC Q&A?</p>
                      <a class="text-primary fw-bold ms-2" href="{{ route('auth.login') }}">Create an account</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>
