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

<body class="pattern">
    @include('user.kitab.shortcut')
                <div id="main_article" class="col-md-8 col-sm-12 col-xs-12 rounded-start sanad_main">
                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Ilmu Talfīq al-Hadīś</h3>
                    </div>
                    <p class="content">
                        Ilmu Talfīq al-Hadīś, yakni ilmu yang menjelaskan tentang cara-cara mengkompromikan
                        hadis-hadis yang dhahirnya tampak bertentangan dengan hadis-hadis lainnya. Padahal sejati
                        hadis-hadis tersebut tidak bertentangan.</p>

                    <p class="content-arab">
                        اَلعِلْمُ اَّلذِيْ يبْحَثُ فِى الاَحَادِيْثِ اَلَّتِى ظَاهِرُهَا مُتَعَارِضَة
                    </p>
                    <p class="content">Artinya: Ilmu yang membahas tentang hadis-hadis yang isinya tampak
                        bertentangan.</p>

                    <p class="content">Ilmu ini juga disebut dengan ‘Ilmu Mukhtalaf al-Hadīs. Ulama-ulama yang telah
                        menyusun kitab dengan pembahan ini adalah Imam Syafi’i (w. 204 H), Ibn Qurtaibah (w. 276 H),
                        At-Tahāwi (w. 321 H) dan Ibn Jauzī (w. 597 H)</p>

                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Ilmu ’Ilāl al-Hadīś</h3>
                    </div>
                    <p class="content"> Ilmu ’Ilāl al-Hadīś, yakni ilmu yang membicarakan hadis-hadis yang secara
                        dzahir kelihatan sah, namun kemudian terdapat beberapa kekeliruan/ kesalahan/cacat di
                        dalamnya.</p>
                    <p class="content"> Kata ‘Ilal adalah bentuk jamak dari dari kata ‘illah yang artinya penyakit.
                        Ahli hadis menyebut ‘illah sebagai suatu sebab yang tersembunyi yang dapat mengurangi status
                        kesahihan hadis padahal dhahirnya tidak tampak ada cacat sebagaimana definisi di bawah ini:
                    </p>
                    <p class="content-arab">اَلعِلْمُ اَّلذِيْ يبْحَثُ عَنِ اْلاَسْبَابِ اْلخَفِيَّةِ اْلغَامِضَةِ
                        مِنْ جِهَةِ قَدْحِهَا فِى الحَدِيْثِ</p>
                    <p class="content">Artinya: “Ilmu yang membahas sebab-sebab yang tersembunyi yang dapat merusak
                        (mencacatkan) kesahihan hadis .”</p>

                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Ilmu Asbāb al-Wurūd al-Hadīś</h3>
                    </div>

                    <p class="content"> Ilmu Asbāb al-Wurūd al-Hadīś, yakni ilmu yang menjelaskan latar belakang,
                        sebab-sebab atau konteks di mana hadis tersebut terjadi.</p>
                    <p class="content-arab">اَلعِلْمُ يعْرَفُ بهِ اَسْبَابُ وُرُوْدِ اْلحَدِيثِ وَمُنَاسَبَتِهِ</p>
                    <p class="content">Artinya: Ilmu yang menjelaskan tentang sebab munculnya hadis dan hubungannya
                        dengan hadis tersebut.
                    </p>
                    <p class="content">Ilmu ini sangat penting berkaitan dengan istinbat hukum. Untuk mengetahui
                        apakah hadis-hadis
                        tersebut berlaku sebagai nāsikh dan berlaku sebagai mansūkh bisa dilihat dengan beberapa
                        cara:</p>
                    <p class="content">Melalui penjelasan dari nash atau syari’ itu sendiri, yakni Rasulullah SAW
                        Melalui penjelasan para Sahabat
                        Melalui tarikh keluarnya hadis serta sebab turun hadis (asbāb al-wurūd).</p>
                    <p class="content">Sejumlah ulama sudah ada yang menyusun kitab tentang nasikh-mansūkh hadis, di
                        antaranya adalah
                        Ibnu Syāhīn (w. 385) dengan karyanya yang berjudul an-Nāsikh wa al-Mansūkh fī al-Hadīs.</p>

                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Ilmu al-Jarh wa at-Ta’dīl</h3>

                    </div>
                    <p class="content">Ilmu al-Jarh wa at-Ta’dīl, yakni ilmu yang digunakan untuk menilai atau
                        mengkritik para perawi hadis. Apakah perawi hadis tersebut memiliki reputasi yang baik,
                        adil, tsiqah, kuat hapalannya, suka berdusta atau sebaliknya. Sehingga dari penilaian
                        tersebut, seseorang bisa menyimpulkan kualitas sanad (rangkaian perawi hadis) sebuah hadis.
                    </p>
                    <p class="content-arab">عِلْمٌ يُبْحَثُ عَنِ الرُّوَّاةِ مِنْ حَيْثُ مَاوَرَدَ فِى شَأْنِهِمْ
                        مِمَّا يَشنيهِمْ اَوْ يُزَكِّهِمْ بِاَلْفَاظٍ مَخْصُوْصَةٍ
                    </p>
                    <p class="content">Artinya: Ilmu yang membahas tentang para perawi hadis dari segi yang dapat
                        menunjukkan keadaan mereka, baik yang dapat mencacatkan (mengkritik buruk) atau membersihkan
                        (menilai baik) mereka, dengan ungkapan atau lafadz tertentu.
                    </p>
                    </div>




</body>

</html>
