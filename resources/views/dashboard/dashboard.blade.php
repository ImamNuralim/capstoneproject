@extends('dashboard.index')
<!--  Body Wrapper -->
@section('dashboard')

    <style>
        .icon {
            float: right;
            font-size: 500%;
            position: absolute;
            top: 0rem;
            right: -0.3rem;
            opacity: .16;
        }


        #container {
            width: 1200px;
            display: flex;
        }

        .grey-dark {
            background: #495057;
            color: #efefef;
        }

        .red-gradient {
            background: linear-gradient(180deg, rgba(207, 82, 82, 1) 0%, rgba(121, 9, 9, 1) 80%);
            color: #fff;
        }

        .red {
            background: #a83b3b;
            color: #fff;
        }


        .purple {
            background: #886ab5;
            color: #fff;
        }

        .orange {
            background: #ffc241;
            color: #fff;
        }

        .kpi-card {
            overflow: hidden;
            position: relative;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.75);
            ;
            display: inline-block;
            float: left;
            padding: 1em;
            border-radius: 0.3em;
            font-family: sans-serif;
            width: 240px;
            min-width: 180px;
            margin-left: 0.5em;
            margin-top: 0.5em;
        }

        .card-value {
            display: block;
            font-size: 200%;
            font-weight: bolder;
        }

        .card-text {
            display: block;
            font-size: 70%;
            padding-left: 0.2em;
        }
    </style>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->

            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-8 d-flex align-items-strech">


                        <div class="card">
                            <div id="container">
                                <div class="kpi-card orange">
                                    <span class="card-value">$ 1,342 </span>

                                    <span class="card-text">Total Ustaz</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>


                                <div class="kpi-card purple">
                                    <span class="card-value">$ 1,342 </span>
                                    <span class="card-text">Total Murid</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>

                                <div class="kpi-card grey-dark">
                                    <span class="card-value">$ 1,342 </span>
                                    <span class="card-text">Total Postingan</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>

                                <div class="kpi-card red">
                                    <span class="card-value">1,342 </span>
                                    <span class="card-text">Total User Umum</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Yearly Breakup -->

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-body">

                </div>



            </div>


        </div>
    </div>

@stop
