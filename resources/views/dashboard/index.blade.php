@extends('dashboard.layouts.main')
    @section('container')
        <!doctype html>
        <div class="row"></div>
        <html class="html">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <div class="content__header content__boxed overlapping" style="padding-bottom: 10%">
            <div class="content__wrap">
                <h3 class="page-title mb-1">Dashboard</h3>
                <h6 class="h5">Welcome back to the Dashboard</h6>
                <p>Perhutani adalah Badan Usaha Milik Negara berbentuk Perusahaan Umum (Perum)
                    <br> yang memiliki tugas dan wewenang untuk mengelola sumberdaya hutan negara di pulau Jawa dan Madura.
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: -5%; gap:25px">
            <div class="column">
                <div class="curd">
                    <div class="card-body text">Laporan</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark " href="/dashboard/laporans">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="curd">
                    <div class="card-body text">Kategori</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark " href="/dashboard/categories">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="curd">
                    <div class="card-body text">BKPH</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark " href="/dashboard/bkphs">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
            @can('superadmin')
            <div class="column">
                <div class="curd">
                    <div class="card-body text">Administrator</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark " href="/dashboard/users">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            @endcan



        <div class="row">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            {{-- CHART KPH --}}
            <div class="card1">
                <div class="header-card1">
                    <p>RO TEBANGAN JATI
                        <br> <span
                            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Trafic
                            January - December</span>
                    </p>
                </div>
                <canvas id="myChart"></canvas>
                <script>
                    var data = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Target (m³)",
                            data: [1214.42, 2671.72, 5100.56, 7772.28, 10444.00, 13358.60, 16273.20, 19187.80, 22102.40,
                                24288.37, 24288.37, 24288.37
                            ],
                            borderColor: "#31ACBD",
                            fill: false
                        }]
                    };

                    var myChart = new Chart(document.getElementById("myChart"), {
                        type: "line",
                        data: data,
                        options: {

                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
            {{-- myChart --}}
            <div class="card2">
                <div class="header-card2">
                    <p>RO TEBANGAN RIMBA
                        <br> <span
                            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Trafic
                            January - December</span>
                    </p>
                </div>
                <canvas id="myChart2"></canvas>
                <script>
                    var data = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Target (m³)",
                            data: [3.24, 9.73, 20.54, 32.43, 44.32, 57.29, 70.26, 83.23, 96.20, 104.85, 108.12],
                            borderColor: "#01AE42",
                            fill: false
                        }]
                    };

                    var myChart2 = new Chart(document.getElementById("myChart2"), {
                        type: "line",
                        data: data,
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
            <div class="card2">
                <div class="header-card2">
                    <p>RO AGROFORESTRY JAGUNG
                        <br> <span
                            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Trafic
                            January - December</span>
                    </p>
                </div>
                <canvas id="myChart3"></canvas>
                <script>
                    var data = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Target (m³)",
                            data: [ 0.0, 0.0, 54.435248 ,101.094032, 124.423424, 159.417512, 194.411600, 229.405688, 276.064472, 322.723256, 361.605576, 388.823200 
],
                            borderColor: "#01AE42",
                            fill: false
                        }]
                    };

                    var myChart3 = new Chart(document.getElementById("myChart3"), {
                        type: "line",
                        data: data,
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
            <div class="card2">
                <div class="header-card2">
                    <p>RO AGROFORESTRY SERASAH
                        <br> <span
                            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Trafic
                            January - December</span>
                    </p>
                </div>
                <canvas id="myChart4"></canvas>
                <script>
                    var data = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Target (m³)",
                            data: [ 11.349698, 26.482628, 52.965255, 98.364045, 121.063440, 155.112533, 189.161625, 223.210718, 268.609508, 314.008298, 351.840623, 378.323250 
],
                            borderColor: "#01AE42",
                            fill: false
                        }]
                    };

                    var myChart4 = new Chart(document.getElementById("myChart4"), {
                        type: "line",
                        data: data,
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>
        
        
       
        <br>
        <br>
        <br>
        <br>
        <br>

        </div>
    @endsection


    </html>