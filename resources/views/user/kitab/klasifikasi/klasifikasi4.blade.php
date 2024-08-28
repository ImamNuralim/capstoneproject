@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mushthalah al-Hadits | ElHadith</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/klasifikasi.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan:ital@0;1&display=swap" rel="stylesheet">


</head>

<body class="pattern">
    @include('user.kitab.shortcut')
                <div id="main_article" class="col-md-8 col-sm-12 col-xs-12 rounded-start sanad_main">
                    <ol start="6">
                        <li class="content-list-level-ul">
                            Hadits Maudhu'
                            <ol>
                                <li class="content-list-level-dec">
                                    Pengertian
                                    <p class="content">
                                        Hadis maudhu’ adalah hadis yang dibuat-buat atau diciptakan atau didustakan
                                        atas nama Nabi. Menurut Ahmad Amin hadis maudhu’ sudah ada sejak masa
                                        Rasulullah. Dasarnya adalah munculnya hadis:
                                    </p>
                                    <p class="content-arab">
                                        من كذب علي متعمدا فليتبوأ مقعده من النار. رواه ابلخارى
                                    </p>
                                    <p class="content">
                                        “Barang siapa yang sengaja bedusta atas namaku maka hendaklah tempatnya di
                                        neraka.” (HR. Bukhari)
                                    </p>
                                    <p class="content">
                                        Ulama Hadis lain berpendapat bahwa munculnya hadis maudhu’ adalah pada tahun
                                        40 H, pada masa khalifah Ali bin Abi Thalib ketika terjadi pertikaian
                                        politik
                                    </p>


                                </li>
                                <li class="content-list-level-dec">
                                    Faktor Penyebab Munculnya
                                    <ol>
                                        <li class="content-list-level-cir">
                                            Pertentangan politik antara Ali dan Muawiyah. Menurut Ibnu Abi al-Hadid
                                            kelompok Syiah adalah yang pertama kali membuat hadis maudhu’.
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Pertentangan politik antara Ali dan Muawiyah. Menurut
                                                Ibnu Abi al-Hadid
                                                kelompok Syiah adalah yang pertama kali membuat hadis maudhu’.
                                            </p>

                                        </li>
                                        <li class="content-list-level-cir">
                                            Usaha kaum zindiq, yaitu golongan yang berusaha merusak Islam dari
                                            dalam, seperti dilakukan oleh Abdul Karim Ibn alAuja’yang mengaku telah
                                            membuat 4000 hadis palsu. Golongan ini membuat hadis palsu dengan cara
                                            membuat hadis Tasyayyu (membangkitkan fanatisme), Tashawwuf (membenci
                                            dunia), hadis yang mengandung falsafah dan hikmah. Tujuannya adalah
                                            untuk meruntuhkan kecerdasan umat Islam, merusak kepercayaan, akidah,
                                            dan amalan umat islam.
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Perselisihan dalam ilmu Kalam dengan tujuan untuk
                                                memperkuat pandangan kelompok masing-masing. </p>
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Sikap fanatic terhadap suku atau bangsa (ashabiyah).
                                            </p>
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Menarik simpati kaum awam. Mereka membuat kisah-kisah
                                                atau hikayat palsu untuk menarik minat para pendengar. Contohnya:
                                                “Barangsiapa membaca la ilaha illallah, maka Allah akan menjadikan
                                                tiap-tiap kalimatnya seekor burung, paruhnya dari emas, dan buahnya
                                                dari marjan”. </p>
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Menjilat kepada penguasa, seperti yang dilakukan oleh
                                                Ghiyats bin Ibrahim pada masa pemerintahan al-Mahdi. Dia menambahkan
                                                perkataannya sendiri dalam hadis Nabi hanya untuk menyenangkan
                                                khalifah.
                                            </p>
                                        </li>
                                    </ol>
                                </li>
                                <li class="content-list-level-dec">
                                    Usaha Penyelamatan dari hadis Maudhu’
                                    <ol>
                                        <li class="content-list-level-cir">
                                            Menyusun kaidah penelitian hadis, khususnya kaidah tentang kesahihan
                                            sanadnya.
                                        </li>
                                        <li class="content-list-level-cir">
                                            Menyusun kitab-kitab yang memuat tentang hadis maudhu’ antara lain:
                                            al-Maudhu’ al-Kubra yang disusun oleh Abu al-Fajri
                                        </li>
                                    </ol>
                                </li>
                                <li class="content-list-level-dec">
                                    Cara Mengetahui
                                    <ol>
                                        <li class="content-list-level-cir">
                                            Adanya pengakuan dari pembuatnya
                                        </li>
                                        <li class="content-list-level-cir">
                                            Maknanya rusak, dalam arti bertentangan dengan al-Qur’an, hadis
                                            mutawatir, dan hadis sahih.
                                        </li>
                                        <li class="content-list-level-cir">
                                            Matannya menyebutkan janji yang besar untuk perbuatan kecil. d. Rawinya
                                            pendusta.
                                        </li>
                                        <li class="content-list-level-cir">
                                            Rawinya pendusta.
                                        </li>

                                    </ol>
                                </li>
                            </ol>
                        </li>


                        </li>
                    </ol>
                        <div class="w-100" style="height: 10rem;">
                            <div id="indikator_halaman" class="d-flex justify-content-center">
                                <a href="{{ route('user.kitab.klasifikasi.klasifikasi') }}">
                                    <div class="circle {{ request()->is('user/kitab/klasifikasi/klasifikasi') ? 'active' : '' }}">
                                        1
                                    </div>
                                </a>
                                <a href="{{ route('user.kitab.klasifikasi.klasifikasi2') }}">
                                    <div class="circle {{ request()->is('user/kitab/klasifikasi/klasifikasi2') ? 'active' : '' }}">
                                        2
                                    </div>
                                </a>
                                <a href="{{ route('user.kitab.klasifikasi.klasifikasi3') }}">
                                    <div class="circle {{ request()->is('user/kitab/klasifikasi/klasifikasi3') ? 'active' : '' }}">
                                        3
                                    </div>
                                </a>
                                <a href="{{ route('user.kitab.klasifikasi.klasifikasi4') }}">
                                    <div class="circle {{ request()->is('user/kitab/klasifikasi/klasifikasi4') ? 'active' : '' }}">
                                        4
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>




</body>

</html>
