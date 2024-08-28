@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mushthalah al-Hadits | ElHadith</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/kitab.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <!-- Script -->
    <script src="{{ asset('assets/GlobalAssets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/GlobalAssets/js/load_vendor.js') }}"></script>

</head>
<style>

</style>
<body class="pattern">
    @include('user.kitab.shortcut')
    <div id="main_article" class="col-md-8 col-sm-12 col-xs-12 rounded-start sanad_main">
        <h2 id="judul" class="text-capitalize my-2">kitab-Kitab Hadits</h2>
                        <div class="my-3">
                            <img class="img-fluid my-2 rounded-2 shadow" src="{{ asset('img/baner_kitab.png') }}"
                                alt="">
                        </div>
                        <p class="content">
                            Hadis adalah rekaman kehidupan Nabi Muhammad saw. Posisi hadis sangatlah penting sebagai
                            sumber ajaran Islam di samping Al-Qur’an. Hadis Nabi berfungsi sebagi penjelas (bayan) bagi
                            Al-Qur’an. Karena posisi dan fungsi hadis sangat penting, maka hadis sangatlah perlu untuk
                            dikaji. </p>

                        <p class="content"> Jika dilihat darik volume teksnya, Al-Qur’an dapat dikatakan relatif
                            ringkas, yakni sekitar
                            600-an halaman, sedangkan hadis Nabi jumlahnya sangat banyak. Teks hadis tersimpan dalam
                            banyak kitab dengan jumlah juz/jilid yang banyak pula. Selain itu, kitab-kitab hadis disusun
                            dengan sistematika atau metode penulisan yang sangat beragam. Karena itu, agar dapat
                            mengakses dan mengkaji hadis Nabi dari sumber-sumbernya secara langsung dan baik, maka
                            diperlukan pengetahuan yang memadai tentang kitab-kitab hadis. </p>

                        <p class="content"> Karena kitab koleksi hadis sangat beragam dan banyak jumlahnya, maka perlu
                            dikelompokkan
                            supaya lebih mudah dikenali dan dipahami persamaan dan perbedaannya. Pengelompokan
                            kitab-kitab hadis antara lain bisa dibedakan menjadi kitab hadis primer (sebagian
                            menyebutnya dengan istilah asli, induk, mashdar, atau mu’tabar) dan kitab hadis sekunder
                            (marja’ atau turunan). </p>

                        <p class="content"> Kitab hadis primer dan kitab hadis sekunder dewasa ini dapat dibedakan
                            minimal melalui atau
                            dari tiga hal sebagai berikut:
                        <ol>
                            <li class="content-list-level-dec">
                                judulnya; kitab hadis primer biasanya menggunakan istilah varian pola kitab dan diikuti
                                nama
                                populer penyusunnya, misalnya Shahīh al-Bukhāri dan Musnad Ahmad, sedangkan kitab 3
                                hadis
                                sekunder biasanya dinamai menurut kreasi penyusunnya, umumnya berupa frasa yang
                                mengindikasikan isinya, misalnya alTarghīb wa al-Tarhīb dan Bulūg al-Marām min Adilah
                                al-Ahkām;
                            </li>
                            <li class="content-list-level-dec">
                                teks hadisnya; dalam kitab hadis primer semua hadis ditulis lengkap sanad dan matannya;
                                sedangkan dalam kitab hadis sekunder matannya ditulis lengkap tapi sanad biasanya
                                dipangkas
                                hanya nama periwayat sahabat dan mukhārij (nama ulama penyusun kitab hadis primer); dan
                            </li>
                            <li class="content-list-level-dec">
                                penyusun kitab; semua kitab hadis primer disusun oleh sejumlah ulama pada abad I-IV H
                                yang
                                mendapatkan hadis (umumnya) berdasarkan pencarian langsung menemui para guru, sedangkan
                                penyusun kitab hadis sekunder adalah generasi setelahnya yang menyusun kitab dengan
                                mengambil hadis dari kitab-kitab hadis primer.
                            </li>
                        </ol>
                        </p>
                        <p class="content text-center fst-italic">
                             <span><a class="text-decoration-none" href="/kitab/page/Primer/">Klik untuk penjelasan lebih lanjut</a></span>
                        </p>
                        <div class="w-100" style="height: 25rem;">
                            <div id="indikator_halaman" class="row">
                                <a href="{{ route('user.kitab.kitab-kitab.primer') }}">
                                    <div class="circle active mx-auto rounded-pill w-50 fs-5">
                                        Kitab Hadis Primer
                                    </div>
                                </a>
                                <a href="{{ route('user.kitab.kitab-kitab.kitabsekunder') }}">
                                    <div class="circle active mx-auto rounded-pill w-50 fs-5">
                                        Kitab Hadis Sekunder
                                    </div>
                                </a>
                            </div>
                        </div>
    </div>
</body>

</html>
