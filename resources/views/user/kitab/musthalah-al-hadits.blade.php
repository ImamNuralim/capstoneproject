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
        <h2 id="judul" class="text-capitalize my-2">Mushthalah al-Hadits</h2>
        <div class="containerr">
            <p class="content">
                Dalam agama Islam, hadis memiliki peran penting sebagai sumber ajaran dan panduan bagi umat
                Muslim. Hadis merujuk pada tradisi, perkataan, dan tindakan Rasulullah Muhammad SAW, yang
                menjadi teladan bagi seluruh umat Islam. Tapi tau gaksi, ada istilah lain yang membahas
                seputar hadis. Dalam tulisan ini, akan dijelaskan beberapa istilah tersebut.
            </p>
            <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                <h3 class="m-0 py-1">Mushthalah al-Hadits</h3>
            </div>
            <p class='content'>Ilmu tentang dasar dan kaidah untuk mengetahui keadaan seorang perawi dan
                yang diriwayatkannya dari segi diterima dan ditolaknya.</p>
            <p class='content'>Mahmud Thahhan dalam karyanya Taysir Musthalahil Hadits mendefinisikannya
                sebagai berikut.</p>
            <p class='content-arab'>علم بأصول وقواعد يعرف بها أحوال السند والمتن من حيث القبول والرد.</p>
            <p class='content fst-italic'>Artinya, “Yaitu ilmu yang mengkaji tentang kaidah-kaidah terkait
                sanad (silsilah) dan matan (redaksi) sebuah hadits untuk menentukan apakah dia valid atau
                tidak.”</p>
            <p class='content'>Objeknya adalah sanad dan matan dari segi diterima dan ditolaknya.</p>
            <p class='content'>Faidahnya membedakan antara hadits-hadits yang shahih dengan hadits-hadits
                yang sakit (cacat).</p>
            <p class='content'>Pencetus pertama kali adalah Al-Qadhi Abu Muhammad Al-Hasan bin Abdurrahman
                bin Khallad Ar-Ramahurmuzi (360 H) lewat karyanya Al-Muhaddits al-Fashil baynar Rawi wal
                Wa’i.</p>
            <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                <h3 class="m-0 py-1">Apa itu Hadits ?</h3>
            </div>
            <p class='content'>Secara etimologi, hadis adalah kata benda (isim) dari kata al-Tahdis yang
                berarti pembicaraan. Kata hadits mempunyai beberapa arti; yaitu
            </p>

            <ol>
                <li class="content">
                    <span class="fst-italic"> “Jadid”</span> (baru), sebagai lawan dari kata <span
                        class="fst-italic">“qadim”</span> (terdahulu). Dalam hal ini yang
                    dimaksud
                    qadim adalah kitab Allah, sedangkan yang dimaksud jadid adalah hadis Nabi saw. Namun
                    dalam rumusan lain mengatakan bahwa al-Qur’an disebut wahyu yang matluw karena
                    dibacakan
                    oleh Malaikat Jibril, sedangkan hadis adalah wahyu yang ghair matluw sebab tidak
                    dibacakan oleh malaikat Jibril. Nah, kalau keduanya sama-sama wahyu, maka dikotomi,
                    yang
                    satu qadim dan lainnya jadid tidak perlu ada.
                </li>
                <li class="content">
                    <span class="fst-italic"> “Qarib”</span> , yang berarti dekat atau dalam waktu dekat
                    belum lama,
                </li>
                <li class="content">
                    <span class="fst-italic"> “Jadid”</span> (baru), sebagai lawan dari kata <span
                        class="fst-italic">“qadim”</span> (terdahulu). Dalam hal ini yang
                    dimaksud
                    qadim adalah kitab Allah, sedangkan yang dimaksud jadid adalah hadis Nabi saw. Namun
                    dalam rumusan lain mengatakan bahwa al-Qur’an disebut wahyu yang matluw karena
                    dibacakan
                    oleh Malaikat Jibril, sedangkan hadis adalah wahyu yang ghair matluw sebab tidak
                    dibacakan oleh malaikat Jibril. Nah, kalau keduanya sama-sama wahyu, maka dikotomi,
                    yang
                    satu qadim dan lainnya jadid tidak perlu ada.
                </li>
                <li class="content">
                    <span class="fst-italic"> “Khabar”</span> , yang berarti warta berita yaitu
                    sesuatu yang dipercakapkan dan dipindahkan dari seseorang kepada seseorang. Hadis selalu
                    menggunakan ungkapan ,حدثنا ,أخربنا أنبأنا megabarkan kepada kami, memberitahu kepada
                    kami dan menceritakan kepada kami. Dari makna terakhir inilah diambil perkataan “hadits
                    Rasulullah” yang jamaknya “ahadits”.
                </li>
            </ol>
            <p class="content">
                Sedangkan pengertian hadits secara terminologi, Pengertian hadis secara terbatas diantaranya
                sebagaimana yang diberikan oleh Mahmud Tahhan adalah:
            </p>
            <p class="content-arab">
                ما أضيف إلى النبي صل الله عليه وسلم من قول أو فعل أو تقرير أو صفة
            </p>
            <p class="content fst-italic">
                “Sesuatu yang disandarkan kepada Nabi baik berupa perkataan atau perbuatan atau persetujuan
                atau sifat”.
            </p>
            <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                <h3 class="m-0 py-1">Apa itu Sunnah ?</h3>
            </div>
            <p class="content">Secara etimologis, sunnah berarti perjalanan yang pernah ditempuh. Dalam
                istilah Arab, sunnah
                berarti “preseden” yang kemudian ditiru orang lain, apakah sezaman atau sesudahnya; tidak
                dipersoalkan apakah sunnah itu baik atau buruk. Dalam bahasa Eropa sunnah diartikan dengan
                “tradition” atau “adat istiadat dalam bahasa Indonesia. Jamaknya adalah “Sunan”</p>
            <p class="content">Sunnah menurut istilah muhadditsin (ahli-ahli hadits) pengertiannya sama
                dengan pengertian
                hadis, ialah :</p>
            <p class="content-arab"> كل ما أثر عن النبي صلي الله عليه و سلم من قول أو فعل أو تقرير أو صفة
                خلقية أو خلقية أو سيرة
                سواء أكان ذالك قبل البعثة أم بعدها </p>
            <p class="content">“Segala yang dinukilkan dari Nabi SAW., baik berupa perkataan, perbuatan,
                maupun berupa
                taqrir, pengajaran, sifat, kelakuan, perjalanan hidup baik yang demikian itu sebelum Nabi
                SAW., dibangkitkan menjadi Rasul, maupun sesudahnya”. </p>
            <p class="content">Ulama hadis mendefinisikan sunnah sebagaimana di atas, karena mereka
                memandang diri Rasul
                SAW., sebagai uswatun hasanah atau qudwah (contoh atau teladan) yang paling sempurna, bukan
                sebagai sumber hukum. Kapasitas beliau sebagai imam yang memberi petunjuk dan penuntun yang
                memberikan nasihat yang diberitakan oleh Allah SAW serta sebagai teladan dan figur bagi
                kita.</p>
            <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                <h3 class="m-0 py-1">Apa itu Khabar ?</h3>
            </div>
            <p class="content">Khabar menurut bahasa adalah warta berita yang disampaikan dari seseorang,
                jamaknya:
                “Akhbar”. </p>
            <p class="content">Secara istilah menurutulama hadits merupakan sinonim dari hadits yakni.
                segala yang datang
                dari Nabi, sahabat dan tabi’in. Keduanya mencakup yang marfu’, mauquf, dan maqtu’. </p>
            <p class="content">Sebagaian ulama mengatakan hadits adalah apa yang datang dari Nabi SAW.
                Sedang khabar adalah
                apa yang datang dari selain Nabi SAW. Oleh karena itu orang yang sibuk dengan sunnah disebut
                “Muhaddits”, sedang yang sibuk dengan sejarah dan sejenisnya disebut “Akhbariy”. </p>
            <p class="content">Dikatakan bahwa antara hadits dan khabar terdapat makna umum dan khusus yang
                mutlak. Jadi
                setiap hadits adalah khabar tetapi tidak sebaliknya.</p>
            <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
                <h3 class="m-0 py-1">Apa itu Atsar ?</h3>
            </div>
            <p class="content">Atsar menurut bahasa adalah “bekas sesuatu atau sisa sesuatu” berarti
                nukilan. Jamaknya atsar
                atau utsur. </p>
            <p class="content">Sedang menurut istilah jumhur ulama artinya sama dengan khabar dan hadits.
                Para fuqaha
                memakai perkataan atsar untuk perkataan ulama salaf, sahabat, tabi’in dan lain-lain. Ada
                yang mengatakan atsar lebih umum daripada khabar. </p>
            <p class="content">Imam Nawawi menerangkan: bahwa fuqaha khurasan menamai perkataan sahabat
                (mauquf) dengan
                atsar dan menamai hadist Nabi (marfu’) dengan kabar</p>
            <div class="my-4 px-5 py-1 text-break w-100 text-start subtitle">
                <h3 class="m-0 py-1">Perbedaan Hadis, Sunnah, Khabar, dan Atsar</h3>
            </div>
            <p class="content"> Dari penjelasan di atas maka tampaklah ada persamaan dan perbedaan antara
                pengertian hadis dan sinonimnya. Perbedaannya sebagai berikut :
            </p>
            <ol>
                <li class="content">
                    Hadis adalah: segala yang disandarkan kepada Nabi Muhammad Saw, baik berupa perkataan
                    (qauly), perbuatan (fi’ly), maupun ketetapan (taqriry).
                </li>
                <li class="content">
                    Sunnah: segala yang diperintahkan, dilarang, dan dianjurkan oleh Nabi Muhammad Saw, baik
                    berupa perkatan maupun perbuatan dan merupakan kebiasaan yang dilakukan berulang kali..
                </li>
                <li class="content">
                    Khabar adalah sesuatu yang datang dari selain Nabi.
                </li>
                <li class="content">
                    Atsar adalah sesuatu yang berasal dari sahabat Nabi.
                </li>
            </ol>
        </div>
    </div>

</body>

</html>
