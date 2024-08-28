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
                    <h2 id="judul" class="text-capitalize my-2">Sanad dan Matan</h2>
                    <p class="content">
                        Sebelum mengkaji tentang sanad dan matan, maka akan dicantumkan satu hadis dengan sanad dan
                        matan yang lengkap di bawah ini guna untuk mempermudah mengetahui dan mempelajari mengenai
                        sanad dan matan hadis.
                    </p>
                    <p class="content content-arab">
                        حَدَّثَنَا عَبْدُ اللَّهِ بْنُ مَسْلَمَةَ عَنْ مَالِكٍ عَنْ زَيْدِ بْنِ أَسْلَمَ عَنْ
                        عَطَاءِ بْنِ يَسَارٍ عَنْ عَبْدِ اللَّهِ بْنِ عَبَّاسٍ قَالَ
                        انْخَسَفَتْ الشَّمْسُ فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ قَالَ
                        أُرِيتُ النَّارَ فَلَمْ أَرَ مَنْظَرًا كَالْيَوْمِ قَطُّ أَفْظَعَ (صحيح البخاري: ٤١٣)
                    </p>
                    <p class="content fst-italic">
                        Telah menceritakan kepada kami 'Abdullah bin Maslamah dari Malik dari Zaid bin Aslam dari
                        'Atha' bin Yasar dari 'Abdullah bin 'Abbas berkata:
                        Ketika terjadi gerhana matahari Rasulullah shallallahu 'alaihi wa sallam melaksanakan shalat
                        (gerhana), kemudian beliau bersabda: "Neraka telah diperlihatkan kepadaku, dan belum pernah
                        sekalipun aku melihat suatu pemandangan yang lebih mengerikan dari pada hari ini." (HR.
                        Bukhari no. 413)
                    </p>
                    <p class="content">
                        Kalimat “Inkhasafat” sampai akhir itulah yang disebut matan Hadis, sedang rangkaian para
                        perowi yang membawa Hadis disebut sanad Hadis. Untuk lebih jelasnya unsur-unsur Hadis dapat
                        dijelaskan sebagai berikut:
                    </p>
                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Sanad</h3>
                    </div>
                    <p class="content">Sanad menurut lughah, ialah: “sesuatu yang kita bersandar kepadanya, baik
                        tembok atau selainnya”. Sedangkan menurut istilah, sanad adalah:</p>
                    <p class="content-arab">طريق متن الحديث</p>
                    <p class="content fst-italic">“Jalan yang menyampaikan kita kepada matan Hadis”.</p>
                    <p class="content">Ringkasnya sanad Hadis ialah yang disebut sebelum matan Hadis.</p>
                    <p class="content">Sedangkan isnad secara lughah ialah menyandarkan sesuatu kepada yang lain.
                        Dan menurut istilah adalah:</p>
                    <p class="content-arab"> رفع الحديث اىلقائله او ناقله</p>
                    <p class="content fst-italic">“Mengangkat Hadis kepada yang mengatakanya atau yang
                        menukilkannya”. </p>
                    <p class="content">Sedangkan pengertian sanad secara terminologis adalah :</p>
                    <p class="content-arab"> سلسلة الرجال الموصلة للمتن</p>
                    <p class="content fst-italic"> “Silsilah orang-orang yang menghubungkan Hadis” </p>
                    <p class="content">Sisilah orang-orang maksudnya adalah susunan atau rangkaian orang-orang
                        perawi Hadis yang menyampaikan materi Hadis sejak mukharrij sampai kepada perawi terakhir
                        yang bersambung kepada Nabi saw</p>
                    <p class="content">Berdasarkan contoh hadis di atas maka yang disebut dengan sanad adalah:</p>
                    <p class="content-arab">عَبْدُ اللَّهِ بْنُ مَسْلَمَةَ عَنْ مَالِكٍ عَنْ زَيْدِ بْنِ أَسْلَمَ
                        عَنْ
                        عَطَاءِ بْنِ يَسَارٍ عَنْ عَبْدِ اللَّهِ بْنِ عَبَّاسٍ</p>
                    <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                        <h3 class="m-0 py-1">Matan</h3>
                    </div>
                    <p class="content"> Matan menurut lughat ialah jalan tengah, punggung bumi atau bumi yang keras
                        dan tinggi. Sedangkan menurut istilah, matan Hadis ialah pembicaraan (kalam) atau materi
                        berita yang diover oleh sanad yang terakhir. Baik pembicaraan itu sabda Rasulullah SAW,
                        sahabat ataupun Tabi'in. Baik pembicaraan itu tentang Nabi atau taqrir Nabi. </p>
                    <p class="content">Menurut Ath Thibi, matan ialah:</p>
                    <p class="content-arab"> ألفاظ الحديث التي تتقوم بها المعانى</p>
                    <p class="content fst-italic">“lafadz-lafadz Hadis yang dengan lafadz-lafadz itulah terbentuk
                        makna”. </p>
                    <p class="content">Sedang menurt Ibnu Jama’ah matan ialah:</p>
                    <p class="content-arab"> ما ينتهى إليه السند غاية السند</p>
                    <p class="content fst-italic">“Sesuatu yang kepadanya berakhir sanad (perkataan yang disebut
                        sesuatu berakhir sanad)”.</p>
                    <p class="content">Berdasarkan contoh hadis di atas maka yang disebut dengan matan adalah</p>
                    <p class="content-arab">انْخَسَفَتْ الشَّمْسُ فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ
                        وَسَلَّمَ ثُمَّ قَالَ أُرِيتُ النَّارَ فَلَمْ أَرَ مَنْظَرًا كَالْيَوْمِ قَطُّ أَفْظَعَ</p>
                    <div>
                    </div>




</body>

</html>
