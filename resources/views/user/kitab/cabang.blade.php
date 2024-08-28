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
                    <h2 id="judul" class="text-capitalize my-2">Cabang Ilmu Hadits</h2>
                        <p class="content">
                            Dari dua pokok dasar ‘Ulūm al-Hadīs (riwāyah dan dirāyah), kemudian muncullah bermacam-macam
                            cabang ilmu hadis, seperti:
                        </p>
                        <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                            <h3 class="m-0 py-1">Ilmu rijāl al-hạdīs</h3>
                        </div>
                        <p class="content">
                            Ilmu rijāl al-hạdīs,ׂ yakni ilmu yang mengkaji tentang para perawi hadis, baik dari
                            sahabat, tabi’in, maupun tabaqah setelahnya:</p>

                        <p class="content-arab">
                            عِلْمٌ يعْرَفُ بهِ رُوَّاةُ اْلحَدِيثِ مِنْ حَيْثُ أَنَّهُمْ رُوَّاةٌ لِلْحَدِيْثِ
                        </p>
                        <p class="content">Artinya: Ilmu untuk mengetahui para perawi hadis dalam kapasitasnya
                            sebagai perawi hadis.</p>

                        <p class="content">Objek kajian hadis pada dasarnya adhadits shahiha dua yaitu kajian sanad dan
                            matan.
                            Ilmu rijāl al-hạdīs
                            ׂ ini lahir bersamaan dengan periwayatan hadis dalam Islam dan mengambil porsi khusus untuk
                            mempelajari persoalan-persoalan sanad. Oleh sebab itu, kajian sanad sangat penting dalam
                            kajian ilmu hadis.</p>

                        <p class="content">Di antara kitab-kitab rijal rijāl al-hạdīs adalah Tabaqāt Al-Qubrā karya
                            Muhammad ibn Sa’ad
                            (w 230 H), Ta baqāt Al-Ruwwah karya Khalifah ibn ‘Asf̣ arī ( w. 240 H). Al-Istī’ab fī
                            Ma’rifat aṣ-Ṣaḥābah karya Ibn Abd al-Barr (w. 463 H/1071 M),
                        </p>
                        <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                            <h3 class="m-0 py-1">Ilmu garīb al-ḥadīś</h3>
                        </div>
                        <p class="content"> Ilmu garīb al-ḥadīś. Dalam kitab Muqaddimah, Ibnu Salāh menggambarkan
                            tentang ilmu ini:</p>
                        <p class="content-arab">هُوَ عِبَارَةٌ عَمَّا وَقَعَ فِى مُتُوْنِ الْأحَادِيْثِ مِنَ الألْفَاظِ
                            اَلْغَامِضَةِ
                            اَلْبِعِيْدَةِ مِنَ الفَهْمِ لِقِلَّةِ اِسْتِعْمَالِهَا</p>
                        <p class="content">Artinya: ”Penjelasan mengenai adanya lafad-lafad yang tidak jelas yang sulit
                            dipahami karena
                            jarang digunakan.”</p>
                        <p class="content">Nabi adalah sefasih-fasihnya orang Arab yang diutus untuk menghadapi kaumya
                            yang bermacam suku
                            dan kabilah. Adakalanya beliau berhadapan dengan kaum tertentu dan beliau menggunakan bahasa
                            dari kaum yang dihadapinya. Kemudian pada perkembangan selanjutnya setelah banyak bangsa
                            non-Arab memeluk Islam mendapati lafal-lafal yang digunakan itu terasa asing / garib. Nah
                            ilmu
                            ini dimunculkan dengan tujuan untuk memudahkan dalam memahami hadis-hadis yang mengandung
                            lafal-lafal yang gharib tersebut.
                        </p>
                        <p class="content">Ulama-ulama yang mula-mula menyusun hadis-hadis yang gharib tersebut adalah
                            Abû Ubaid al-Qâsim
                            bin Salâm (157-224 H) dengan karyanya Gharîb al-Hadîś, Abû Qâsim Jarullah Mahmud bin ‘Umar
                            az-Zamakhsarî (468-538 H) dengan kitabnya Al-Faiqu fî Garîb al-Hadîs, dan Imam Majdudin Abi
                            al-Sa’adat Al-Mubârak bin Muhammad Ibnu’ al-Aśir Al-Jazarî (544-606 H), dengan kitabnya
                            An-Nihâyah fî Garîb al-Hadîs wa al-Aśar.
                        </p>

                        <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                            <h3 class="m-0 py-1">Ilmu al-naskh wa al-mansūkh</h3>
                        </div>

                        <p class="content"> Ilmu al-naskh wa al-mansūkh, yakni ilmu yang membahas hadis-hadis yang
                            menghapus hukum (nāsikh),
                            dan hadis-hadis yang hukumnya dihapuskan (mansūkh). Para ulama mendifinisikan ilmu al-naskh
                            wa
                            al-mansūkh sebagai:</p>
                        <p class="content-arab">هُوَ اَلْعِلْمُ الَّذِيْ يُبْحَثُ عَنِ اْلاَحَادِيْثِ اَلْمُتَعَارِضَةِ
                            اَلَّتِى لاَيُمْكِنُ
                            اَلتَّوْفِيْقِ بَيْنَهَا مِنْ حَيْثُ الْحُكْمِ عَلَى بَعْضِهَا بِاَنَّهُ نَاسِحٌ، وَعَلَى
                            بَعْضِهَا الآخَرِ بِاَنَّهُ مَنْسُوْخٌ، فَمَا ثَبَّتَ تَقَدُّمُهُ كَانَ مَنْسُوْخًا وَمَا
                            تَأَخُّرُهُ نَاسِحٌ</p>
                        <p class="content">Artinya: ”Ilmu yang membahas hadis-hadis yang tidak mungkin dapat
                            dikompromikan dari segi hukum
                            yang terdapat pada sebagianya, karena ia sebagai nasikh (penghapus) terhadap hukum yang
                            terdapat
                            pada sebagian yang lain, karena ia sebagai mansukh (yang dihapus). Karena itu hadis yang
                            mendahului adalah sebagai mansukh dan hadis terakhir adalah sebagai nasikh.”</p>
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
                            <h3 class="m-0 py-1">Ilmu Talfīq al-Hadīś</h3>
                        </div>
                        <p class="content fw-bold">
                            Lanjut? Klik <span><a href="{{ route('user.kitab.cabang2') }}">Disini</a></span>
                        </p>
                    </div>




</body>

</html>
