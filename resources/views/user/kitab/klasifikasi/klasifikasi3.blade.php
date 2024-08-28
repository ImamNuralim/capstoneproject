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
    <!-- Script -->


</head>

<body class="pattern">
    @include('user.kitab.shortcut')
                <div id="main_article" class="col-md-8 col-sm-12 col-xs-12 rounded-start sanad_main">
                    <ol start="4">
                        <li class="content-list-level-ul">
                            Hadits Hasan
                            <ol>
                                <li class="content-list-level-dec">
                                    Pengertian
                                    <p class="content">
                                        Hadis Hasan adalah hadits yang diriwayatkan oleh perawi yang adil, kurang
                                        kuat hapalannya, bersambung sanadnya, tidak mengandung ‘illat dan tidak
                                        syadz. Dari definisi di atas menunjukkan bahwa hadis hasan itu sama dengan
                                        hadis shahih, perbedaannya hanya pada tingkat kedlabithan perowinya berada
                                        di bawah hadis shahih</p>

                                </li>
                                <li class="content-list-level-dec">
                                    Syarat
                                    <ol>
                                        <li class="content-list-level-cir">
                                            Para perawi-nya adil.
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Ke-dhabit-an perawi-nya dibawah perawi hadits shahih.
                                            </p>

                                        </li>
                                        <li class="content-list-level-cir">
                                            Sanad-sanadnya bersambung.
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Tidak terdapat kejanggalan atau syadz, dan </p>
                                        </li>
                                        <li class="content-list-level-cir">
                                            <p class="content">Tidak mengandung ‘illat. </p>
                                        </li>
                                    </ol>
                                </li>
                                <li class="content-list-level-dec">
                                    Pembagian
                                    <ol>
                                        <li class="content-list-level-ll">
                                            Hasan li dzatih
                                        </li>
                                        <p class="content-list-level-cir">
                                            Yang dimaksud dengan hadits hasan li dzatih ialah hadits hasan dengan
                                            sendirinya, yakni hadits yang telah memenuhi persyaratan hadits hasan
                                            yang lima, yang mengacu pada definisi al Asqalani di atas.
                                        </p>
                                        <li class="content-list-level-ll">
                                            Hasan li gharih
                                        </li>
                                        <p class="content-list-level-cir">
                                            Hadits hasan li ghairih ialah hadits hasan bukan dengan sendirinya,
                                            artinya hadits yang menduduki kualitas hasan karena dibantu oleh
                                            keterangan lain baik adanya syahid maupun muttabi’
                                        </p>
                                    </ol>
                                </li>
                                <li class="content-list-level-dec">
                                    Kehujjahan


                                    <p class="content-list-level-cir">
                                        Sebagaimana hadits shahih, menurut para ulama ahli hadits, bahwa hadits
                                        hasan, baik hasan li dzatih maupun hasan li ghairih, juga dapat diadikan
                                        hujjah untuk menetapkan suatu kepastian hukum, yang harus diamalkan.
                                        Hanya saja terdapat perbedaan pandangan diantara mereka dalam soal
                                        penempatan rutbah atau urutannya, yang disebabkan oleh kualitasnya
                                        masing-masing. Ada ulama yang tetap membedakan kualitas kehujjahan baik
                                        antara shahih li datih dan shahih li ghairih dengan hasan li dzatih dan
                                        hasan li ghairih.
                                    </p>
                                </li>
                            </ol>
                        </li>
                        <li class="content-list-level-ul">
                            Hadits Dha'if
                            <ol>
                                <li class="content-list-level-dec">
                                    Pengertian
                                    <p class="content">
                                        Kata ضعيف menurut bahasa berarti yang lemah sebagai lawan kata dari قوي)
                                        yang kuat). Sebagai lawan kata dari shahih kata dha’if juga berarti سقيم)
                                        yang sakit). Maka sebutan hadits dha’if, secara bahasa berarti hadits yang
                                        lemah, yang sakit atau yang tidak kuat. </p>
                                    <p class="content">
                                        Sedangkan pengertian hadis dha’if secara istilah adalah hadits yang
                                        kehilangan satu syarat atau lebih dari syarat-syarat hadits Shahih atau
                                        hadits Hasan, atau hadis yang tidak ada padanya sifat-sifat hadis shahih dan
                                        hadis hasan. Hadits Dhaif merupakan hadits Mardud yaitu hadits yang tidak
                                        diterima oleh para ulama hadits untuk dijadikan dasar hukum.
                                    </p>

                                </li>
                                <li class="content-list-level-dec">
                                    Pembagian
                                    <ol>
                                        <li class="content-list-level-ll-normal">
                                            Dhaif disebabkan adanya kekurangan pada rawinya baik tentang keadilan
                                            maupun hafalannya, sebagai berikut:
                                        </li>
                                        <ol class="nk">
                                            <li class="content-list-level-nk">Hadis Maudlu’, yaitu hadis yang dibuat
                                                dan diciptakan
                                                oleh seseorang yang kemudian disandarkan kepada Rasulullah secara
                                                palsu dan dusta.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Matruk, yang berarti hadits
                                                yang ditinggalkan yaitu Hadits
                                                yang hanya dirwayatkan oleh seorang perawi saja dan perawi itu
                                                dituduh
                                                berdusta.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Munkar, yaitu hadits yang hanya
                                                diriwayatkan oleh seorang perawi yang lemah yang bertentangan dengan
                                                hadits yang diriwayatkan oleh perawi yang terpercaya/ jujur.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Mu’allal, artinya hadits yang
                                                dinilai sakit atau cacat yaitu hadits yang didalamnya terdapat cacat
                                                yang tersembunyi. Menurut Ibnu Hajar al-Asqalani bahwa hadis
                                                Mu’allal ialah hadits yang nampaknya baik tetapi setelah diselidiki
                                                ternyata ada cacatnya. Hadits ini biasa juga disebut Hadits Ma’lul
                                                (yang dicacati) dan disebut Hadits Mu’tal (Hadits sakit atau cacat).
                                            </li>
                                            <li class="content-list-level-nk">Hadits Mudlthorib, artinya hadits yang
                                                kacau yaitu hadits yang diriwayatkan oleh seorang perawi dari
                                                beberapa sanad dengan matan (isi) kacau atau tidaksama dan
                                                kontradiksi dan tidak dapat dikompromikan.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Maqlub, yakni hadits yang
                                                terbalik yaitu hadits yang diriwayatkan perawi yang dalamnya
                                                tertukar dengan mendahulukan yang belakang atau sebaliknya baik
                                                berupa sanad (silsilah) maupun matan (isi).
                                            </li>
                                            <li class="content-list-level-nk">Hadis Muharraf, yaitu hadis yang
                                                terjadi perubahan huruf dan syakalnya. Hadis Muharraf, yaitu hadis
                                                yang terjadi perubahan huruf dan syakalnya.
                                            </li>
                                            <li class="content-list-level-nk">Hadis Mushahhaf, yaitu hadis yang
                                                sudah berubah titik kata.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Mubham yaitu hadits yang
                                                perowinya tidak diketahui identitasnya.

                                            </li>

                                            <li class="content-list-level-nk">Hadits Mudraj, yaitu hadits yang
                                                mengalami penambahan isi oleh perawinya

                                            </li>
                                            <li class="content-list-level-nk">Hadits Syadz, Hadits yang jarang yaitu
                                                hadits yang diriwayatkan oleh perawi orang yang terpercaya yang
                                                bertentangan dengan hadits lain yang diriwayatkan dari perawi-perawi
                                                yang lain.

                                            </li>

                                        </ol>

                                        <li class="content-list-level-ll-normal">
                                            Dhaif disebabkan sanadnya tidak bersambung
                                        </li>
                                        <ol class="nk">
                                            <li class="content-list-level-nk">Hadis Mu’allaq, yaitu hadis yang
                                                digugurkan sanad pertama (guru mukhorrij).
                                            </li>
                                            <li class="content-list-level-nk"> Hadis Mursal, yaitu hadis yang
                                                digugurkan sanad terakhir (sahabat) atau nama sahabat tidak disebut.
                                            </li>
                                            <li class="content-list-level-nk">Hadis Mu’dlal, yaitu hadis yang
                                                digugurkan itu dua orang rawi atau lebih berturut-turut.
                                            </li>
                                            <li class="content-list-level-nk">Hadis Munqathi’, yaitu hadis yang
                                                digugurkan 2 orang perowi atau lebih dan tidak berturut-turut.
                                            </li>
                                            <li class="content-list-level-nk">Hadits Mudallas, disebut juga hadits
                                                yang disembunyikan cacatnya. Hadis mudallas terbagi menjadi 2, yaitu
                                                : (a)Tadlis Isnad, yaitu seorang perowi menerima hadis dari orang
                                                yang semasa, tetapi tidak pernah bertemu langsung atau bertemu
                                                langsung tetapi tidak menyebut namanya. (b)Tadlis Syuyukh, yaitu
                                                seorang perowi menyebut nama gurunya bukan dengan namanya yang
                                                dikenal khalayak umum, tetapi dengan nama yang kurang dikenal
                                            </li>

                                </li>

                            </ol>
                        </li>
                        <li class="content-list-level-dec">
                            Kehujjahan
                            <p class="content">
                                Ada perbedaan pendapat di kalangan ulama mengenai hukum pengamalan hadis dlaif.
                            </p>
                            <p class="content">
                                Pertama, hadis dlaif tidak dapat diamalkan secara mutlak. Menurut madzhab Imam
                                Malik, Syafi’i, Yahya bin Ma’in, Abdurrahman bin Mahdi, Bukhari, Muslim, Ibnu Abdil
                                Bar, Ibnu Hazm dan para imam ahli hadits lainnya, mereka tidak membolehkan beramal
                                dengan hadits dha’if secara mutlaq meskipun untuk fadhaa-ilul a’mal.
                            </p>
                            <p class="content">
                                Kedua, Menurut Ibn Hajar al-Asqalani, hadis dlaif boleh diamalkan dengan beberapa
                                persyaratan yang sangat ketat, yaitu:
                            </p>
                            <ol>
                                <li class="content-list-level-ll-normal">
                                    Hadits tersebut khusus untuk fadhaa-ilul a’mal atau targhib dan tarhib, tidak
                                    boleh untuk akidah atau ahkaam atau tafsir Qur'an
                                </li>
                                <li class="content-list-level-ll-normal">
                                    Hadits tersebut tidak sangat dha’if apalagi hadits-hadits maudhu’, munkar dan
                                    hadits-hadits yang tidak jelas asalnya.
                                </li>
                                <li class="content-list-level-ll-normal">
                                    Hadits tersebut tidak boleh diyakini sebagai sabda Nabi shalallahu ‘alaihi
                                    wasallam dan tidak boleh dimasyhurkan.
                                </li>
                                <li class="content-list-level-ll-normal">
                                    Hadits tersebut harus mempunyai dasar yang umum dari hadits shahih.
                                </li>
                                <li class="content-list-level-ll-normal">
                                    Wajib memberikan bayan (penjelasan) bahwa hadits tersebut dha’if saat
                                    menyampaikan atau membawakannya. Wajib memberikan bayan (penjelasan) bahwa
                                    hadits tersebut dha’if saat menyampaikan atau membawakannya.
                                </li>
                                <li class="content-list-level-ll-normal">
                                    Dalam membawakannya tidak boleh menggunakan lafadz-lafadz jazm (yang
                                    menetapkan), seperti: ‘Nabi shalallahu ‘alaihi wasallam telah bersabda’ atau
                                    ‘mengerjakan sesuatu’ atau ‘memerintahkan dan melarang’ dan lain-lain yang
                                    menunjukkan ketetapan atau kepastian bahwa Nabi shalallahu ‘alaihi wasallam
                                    benar-benar bersabda demikian. Tetapi wajib menggunakan lafadz tamridh (yaitu
                                    lafadz yang tidak menunjukkan sebagai suatu ketetapan). Seperti: ‘Telah
                                    diriwayatkan dari Nabi Shalallahu ‘alaihi wasallam’ dan yang serupa dengannya
                                </li>
                            </ol>
                            <p class="content">
                                Ketiga, berpendapat boleh mengamalkan hadis dlaif secara mutlak. Abu Daud dan Imam
                                Ahmad berpendapat bahwa mengamalkan hadis dlaif lebih disukai daripada berpedoman
                                kepada akal atau qiyas
                            </p>

                                    </li>
                                </ol>
                            </li>
                        </ol>
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
