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
        <div class="my-4 px-5 py-1 text-nowrap text-start subtitle">
            <h3 class="m-0 py-1">Kitab Kolekasi Hadis Pola Periwayat</h3>
        </div>

        <ol>
            <li class="content-list-level-ul">
                Shahih Bukhari
            </li>
            <li class="content-list-level-ul">
                Shahih Muslim
            </li>
            <li class="content-list-level-ul">
                Sunan tirmizi
            </li>
            <li class="content-list-level-ul">
                Sunan Abu Dawud
            </li>
            <li class="content-list-level-ul">
                Sunan Nasa'i
            </li>
            <li class="content-list-level-ul">
                Sunan Ibn Majah
            </li>
        </ol>

        <p class="content mb-0"> Pola kedua ini berdasarkan pada variabel matan sebagai salah satu unsur
            dari hadis di samping sanad. Di dalam kitab dengan pola tematik ini biasanya hadis-hadis
            Nabi diklasifikasikan dan/atau dimasukkan ke dalam kelompok tema tertentu. Suatu kitab hadis
            dengan pola ini biasanya dibagi menjadi beberapa kitāb (bagian) dan setiap kitāb di dalamnya
            terdapat beberapa bāb. Selain istilah kitāb ada juga yang menggunakan istilah faṣlun, namun
            jarang. Setiap kitāb, bāb, atau faṣlun biasanya diberi nama berupa kata atau frasa sesuai
            dengan tema yang dikehendaki. Kitab hadis dengan pola tematik ini ada tiga varian yaitu:
        <ol>
            <li class="content-list-level-ll-normal">
                varian dengan cakupan tema yang umum atau menyeluruh, dan tema yang terbatas atau
                khusus. Untuk varian yang temanya umum biasanya disebut jāmi‘. Dalam varian ini meskipun
                yang dominan adalah tema fiqih, tapi juga memuat tema lain seperti 5 tauhid/iman, ilmu,
                sejarah, keutamaan sahabat, surga-neraka, dan tafsir. Hadis-hadis dalam kitab jāmi‘
                umumnya merupakan hadis marfu’ (yang bersumber dari Nabi), dengan kualitas hadis yang
                beragam (sahih, hasan, atau daif, meskipun sebagian besar sahih). Untuk varian yang
                temanya terbatas atau khusus, hampir semuanya berkategori tema fiqih atau hukum. Yang
                masuk varian ini ialah kitab mushannaf dan muwaththa. Hadis-hadis dalam kitab varian ini
                di samping hadis marfū’, ada juga hadis mawqūf dan maqthū’, yang merupakan perkataan
                atau perbuatan sahabat dan tabi’in, bahkan terkadang ada atsar, syair, tradisi
                masyarakat, dan pendapat pribadi;
            </li>
            <li class="content-list-level-ll-normal">
                varian tematik plus kualitas hadis. Varian ini tercermin dari populernya sebutan kitab
                hadis ṣaḥīh dan sunan. Istilah ṣaḥīh untuk nama/judul kitab hadis belakangan digunakan
                untuk kitab-kitab hadis yang hampir semua hadisnya berkualitas ṣaḥīh, misalnya kitab
                Ṣaḥīḥ al-Bukhāri dan Ṣaḥīḥ Muslim. Sedangkan istilah sunan digunakan untuk judul kitab
                hadis yang sebagian besar hadisnya berkualitas sahih, tapi banyak pula hadis yang tidak
                sahih, misalnya kitab Sunan Tirmidzi dan Sunan Ibn Majah. Istilah sunan tidak hanya
                digunakan untuk yang temanya khusus fiqih, karena Sunan Tirmidzi pun termasuk kitab
                jāmi‘ yang memuat tema secara umum; dan
            </li>
            <li class="content-list-level-ll-normal">
                varian tematik sebagai pendukung/pelengkap. Dalam varian ini hadis-hadis di dalam kitab
                disusun secara tematik. Keberadaan kitab varian ini terkait langsung dengan kitab hadis
                lain. Yang masuk varian ini misalnya kitab hadis Mustadrak ‘alā al- Ṣaḥīḥain karya Imam
                Hakim al-Naisaburi, yang dimaksudkan sebagai kumpulan hadis suplemen/tambahan/pelengkap
                yang belum ada dalam kitab Ṣaḥīḥ al-Bukhari dan Ṣaḥīḥ Muslim. Yang termasuk varian ini
                juga ialah kitab Mustakhraj Abi Awwānah yang disusun secara tematik, dan khusus memuat
                hadis-hadis dalam Ṣaḥīḥ Muslim dengan jalur periwayatan yang lain yang berbeda.
            </li>
        </ol>
        </p>
        <li class="content-list-level-ul">
            Shahih Bukhari
        </li>
        <ol>
            <li class="content-list-level-dec">
                Profil Pengarang
            </li>
            <p class="content">
                Nama lengkap Imam Bukhari adalah Abū ‘Abdullāh Muḥammād bin ’ Ismāil bin Ibrahīm bin
                al-Mugīrah bin Bardizbah al-Ju’fi al-Bukhārī. Ia terkenal dengan nama al-Bukhari, yang
                disandarkan pada tempat kelahirannya yakni Bukhārā. Ia lahir hari Jumat, 13 Syawwāl 194
                H (21 Juli 810 M) di Bukhara.
            </p>
            <p class="content">
                Imam Bukhari lahir dan besar dalam keluarga ulama yang taat beragama. Ayahnya yaitu
                Syaikh Ismail, terkenal dengan panggilan Abu Hasan, berasal dari Perisa keturunan
                Bardizbah. Ayahnya adalah seorang ulama hadis yang masyhur di Bukhara yang pernah
                menjadi murid Imam Malik. Ia dikenal sebagai orang yang wara’ dan seorang sahabat Hammad
                bin Ziyad dan Ibnu Mubarak, tabi’in masyhur yang diterima riwayatnya di kalangan ulama
                hadis. Ayah Imam Bukhari wafat ketika Bukhari masih kecil.

            </p>
            <p class="content">
                Sejak ayahnya meninggal, pendidikan dan pertumbuhan Imam Bukhari sepenuhnya di bawah
                asuhan ibunya yang dikenal sebagai orang yang sangat tekun beribadah dan banyak berdoa.
                Bukhari saat itu dimasukkan ke surau (kuttab) untuk mempelajari berbagai macam ilmu
                keislaman, terutama mengahafal Al-Qur’an. Abu Hatim al-Warraq, seorang murid dan
                sekretarisnya mengatakan bahwa Imam Bukhari mengaku mulai mengenal hadis semasa di surau
                ini dan umurnya waktu itu sekitar sepuluh tahun.
            </p>
            <p class="content">
                Selama di Bukhara, ia belajar ke sejumlah guru. Di antara guru-gurunya di Bukhara ialah
                al-‘Allamah ad-Dakhili, Muhammad bin Salam al-Baikandi, Abdullah Muhammad bin
                al-Musnadi, dan Ibrahim bin Asy’ab. Melalui para ulama ini, keilmuwan Imam alBukhari
                mengalami peningkatan yang sangat pesat dan mendapat pengakuan dari para ulama dan teman
                sejawatnya. Selepas pendidikan awalnya, ia melakukan perjalanan ilmiah ke Balkha,
                Naisabur, Rayy, Bashrah, Kufah, Makkah, Mesir, dan Syam. Karanenya, pada usia kurang
                dari 16 tahun ia telah banyak hafal matan dan sanad hadis sekaligus beberapa kitab
                karangan Ibnu Mubarak dan Waqi’
            </p>
            <p class="content">
                Imam Bukhari memiliki banyak karya; al-Jāmi' al-Ṣaḥīh atau Ṣaḥīh Bukhāri merupakan karya
                yang paling populer. Krya lainnya 56 ialah: al-Adāb al-Mufrād, at-Tarīkh al-Ṣagīr,
                at-Tarīkh al-Awsaṭ, atTarīkh al-Kabīr, at-Tafsīr al-Kabīr, al-Musnād al-Kabīr, Kitāb
                al-'Ilāl dan yang lainnya.
            </p>
            <p class="content">
                Imam Bukhari, yang sangat terkenal dengan kecerdasan dan kehebatannya di bidang hadis,
                ramah dan dermawan ini, wafat pada malam Idul Fitri tanggal 30 Ramaḍān 256 H (31 Agustus
                870 M) dalam usia 62 tahun. Jenazahnya dimakamkan bakda dhuhur di Khartank, nama sebuah
                desa di Samarkand.
            </p>
            <li class="content-list-level-dec">
                Pengenalan Kitab
            </li>
            <p class="content">
                Kitab Shahih Bukhari, judul aslinya ialah al-Jāmi’al-Musnad alȘahīh al-Mukhtasar min
                Umūri Rasūlillāh Shallallāhu ‘Alaihi wa Sallam wa Sunanihi wa Ayyāmihi. Kitab ini
                merupakan kitab koleksi hadis paling populer dan dinilai paling tinggi kualitasnya.
                Kitab ini disusun oleh Imam Bukhari, konon atas wasiat gurunya, yakni Ishaq ibn
                Rahawaih, agar ia menyusun kitab koleksi hadis yang sahih. Karena itu, ia dengan
                semangat melaksanakannya selama sekitar 16 tahun.
            </p>
            <p class="content">
                Dalam penyusunan kitab, Imam Bukhari menempuh cara tertentu agar derajat kesahihannya
                dapat dipertanggungjawabkan. Langkah yang ditempuhnya antara lain: meneliti para
                periwayatnya, membandingkan hadis satu dengan lainnya, meneliti dan memilih sesuai
                standar kesahihan yang ia tentukan. Menurutnya, guru atau periwayat yang menyampaikan
                hadis harus benar-benar bertemu dengan murid, yakni periwayat yang menerima hadis,
                kendati hanya sekali.
            </p>
            <p class="content">
                Hadis-hadis dalam Shahih al-Bukhari mencakup berbagai persoalan, terutama fiqh, termasuk
                masalah akidah dan akhlak. Ia menyusun kitabnya berdasarkan bab-bab fiqh, dan memasukkan
                atau menyusun hadis-hadis yang terkait dalam setiap bab itu. Strukturnya dibuat dalam
                beberapa kitāb (bagian) dan dibagi lagi ke dalam beberapa bab. Setiap kitāb dan bab
                diberi judul yang menunjuk pada masalah tertentu. Jumlah kitāb-nya 97 buah, dan jumlah
                babnya 4550 buah. Dalam setiap bab yang diberi judul terdapat hadis dalam jumlah yang
                beragam antar babnya. Jumlah hadis seluruhnya 7275 buah termasuk yang berulang,
                sedangkan jika tanpa yang diulang sekitar 4000 hadis.

            </p>
            <p class="content">
                Mayoritas ulama hadis menilai bahwa Shahih Bukhari merupakan kitab koleksi hadis yang
                paling tinggi kualitasnya. Hal ini dikarenakan sanad-sanad dalam kitab ini memiliki
                kualitas sangat tinggi. Karena tingginya kualitas sanad dalam kitab ini, maka jarang
                sekali Shahih Bukhari mendapat kritikan dari aspek sanad. Meski demikian, kritikan
                terhadap aspek sanad hadis pun pernah ada, misalnya kritik yang dilontarkan oleh
                al-Daruqutniy. Kritikan Daruquthny berkenaan dengan 80 periwayat dan 110 hadis; 78 hadis
                diriwayatkan oleh Imam Bukhari sendiri, sementara 32 lainnya diriwayatkan juga oleh Imam
                Muslim. Namun kritikan Daruquthny yang mengatakan bahwa hadis-hadis itu mu’allaq dan
                munqathi’ ternyata seluruhnya muttasil dan marfū’. Penjelasan atau bantahan itu
                disampaikan secara rinci oleh Ibnu Hajar al-Asqalani dalam mukadimah kitab Hady
                al-Sāriy.
            </p>
            <p class="content">
                Kritikan lainnya terhadap kitab ini ialah banyaknya hadishadis yang ditampilkan secara
                berulang. Pengulangan ini terjadi tampaknya karena Imam Bukhari bermaksud memberikan
                informasi hadis dengan redaksi yang variatif, di samping untuk mendukung aspek sanadnya.
            </p>
            <p class="content">
                Juz IV (terakhir), melanjutkan hadis-hadis yang diriwayatkan oleh tiga periwayat sahabat
                lainnya yang banyak meriwayatkan hadis. Ketiga periwayat dimaksud ialah Abdullah bin
                Amru bin alAsh (nomor 2359-2409), Abu Hurairah (nomor 2410-2721), dan Abdullah bin
                Abbas (nomor 2722-2890).
            </p>

        </ol>
        <li class="content-list-level-ul">
            Shahih Muslim
        </li>
        <ol>
            <li class="content-list-level-dec">
                Profil Pengarang
            </li>
            <p class="content">
                Muslim ibn al-Hajjaj (204-261 H=820-875 M). Nama lengkapnya adalah Abu Al-Hasan
                Al-Qusyairi al-Nisaburi Imam alHafiz al-Hujjah. Ia lahir di Nishapur tahun 204 H=820 M.
                Ia pertama kali belajar dan menerima hadis tahun 218 H dalam usia kurang dari 12 tahun.
            </p>
            <p class="content">
                Sejak itu ia sangat serius belajar dan mencari hadis. Kemudian ia banyak melakukan
                lawatan ilmiah ke berbagai negeri, seperti ke Hijaz, Mesir, Syam dan Irak. Ia banyak
                bertemu para guru dan menerima hadis dari mereka. Para guru Imam Muslim sangat banyak,
                diantaranya Ahmad ibn Hanbal, alBukhāri, Ishāq bin Rahwayh, Zuhair bin Harb, Abu Bakar
                bin Abi Shaybah, Ali bin Al-Madini, Muhammad bin Yahya al-Qati’i, Muhammad bin Mahrān,
                Abu Ghasan, Abdullah bin Maslamah, Sa’id bin Manshūr, dan ‘Amr bin Sawad. Adapun
                sejumlah murid yang belajar dan menerima hadis darinya antara lain Abu ‘Isā alTirmidzi,
                Abū Hātim al-Rāzi, Abu Bakar bin Khuzaimah, Abū ‘Awwānah al-Isfaraini, Yahya bin Sa’id,
                Ibrāhim bin Sufyān, dan Muhammad bin Makhlid al-Attar.


            </p>
            <p class="content">
                Ia memiliki banyak karya; al-Jāmi’ al-Shahih atau Shahih Muslim yang dikaji ini
                merupakan karyanya yang paling populer. Karya lainnya ialah: al-Musnad al-Kabir ‘alā
                al-Rijāl, al-Jāmi’ al-Kabīr, al-Asmā wa al-Kunā, al-‘Ilal, Awham al-Muhadditsīn,
                al-Tamyīz, Man 62 Laisa lahu ilā Rāawin Wāhid, Thabaqāt al-Tabīn, al-Mukhadramīn, Awlād
                al-Shahābah, al-Tārikh, Afrād al-Syāmiyyīn, dan al-Shahīh al-Musnad.
            </p>
            <p class="content">
                Imam Muslim wafat dalam usia 55 tahun pada Ahad. Jenazahnya dimakamkan esok hariny,
                Senin 25 Rajab 261 H=875 M di Nashr Aabad, salah satu desa di Naisapur.
            </p>

            <li class="content-list-level-dec">
                Pengenalan Kitab
            </li>
            <p class="content">
                Kitab yang populer dengan Shahih Muslim, judul aslinya adalah Al-Musnad al- Sahih
                al-Mukhtashar bi Naql al-‘Adl ‘an al-‘Adli ilā Rasul Allāh. Karya ini merupakan karya
                puncak Muslim bin al-Hajaj dan salah satu dari sekian banyak karyanya. Kitab ini ditulis
                selama 15 tahun dan merupakan hasil seleksi dari 300.000 hadis yang berhasil dikumpulkan
                oleh Imam Muslim.33 Menurut penomoran yang dibuat oleh Muhammad Fu’ad Abd al-Bāqi,
                jumlah hadis dalam kitab ini34 adalah 3030. Jumlah ini tidak termasuk yang diulang.
            </p>
            <p class="content">
                Berdasarkan sumbernya, hadis-hadis dalam Musnad Ahmad dapat dibagi menjadi enam macam,
                yaitu:

            </p>
            <ol>
                <li class="content-list-level-ll-normal">
                    karena masih sangat sulit mencari referensi koleksi hadis yang memuat hadits-hadis
                    sahih dengan kandungan yang relatif komperhensif dan sistematis, dan
                </li>
                <li class="content-list-level-ll-normal">
                    karena pada masanya terdapat kaum zindiq yang selalu berusaha membuat dan
                    menyebarkan hadis-hadis palsu dan mencampuradukkan antara hadis yang sahih dan yang
                    tidak.
                </li>

            </ol>
            <p class="content">

                Imam Muslim berprinsip bahwa hadis-hadis yang dimasukkan dalam kitabnya hanyalah
                hadis-hadis sahih. Dalam menyeleksi hadis, Ia menentukan kriteria, yaitu:
            </p>
            <ol>
                <li class="content-list-level-ll-normal">
                    meriwayatkan hadis dari periwayat yang yang adil, kuat hafalannya, jujur, amanah,
                    dan tidak pelupa, dan
                </li>
                <li class="content-list-level-ll-normal">
                    hanya meriwayatkan hadis yang musnad, muttashil, dan marfu kepada nabi saw. Bagi
                    Imam Muslim, dalam proses periwayatan hadis, persambungan sanad dapat diterima tidak
                    diharuskan guru dan murid dipastikan pernah bertemu (liqā) sebagaimana pendapat Imam
                    Bukhari, gurunya, tapi cukup diketahui bahwa keduanya mu’āsharah (sezaman).

                </li>
            </ol>
            <p class="content">

                Adapun kritikan yang sering ditujukan ke kitab karya Imam Muslim ini ialah kualitas
                sanad yang tidak menggunakan kriteria yang tinggi, sebagaimana gurunya Imam Bukhari.
                Kritikan ini tampaknya menjadi motivasi bagi Abu Awwānah Ya’qub bin Ishāq al-Isfarāiniy
                (w. 316 H) untuk menyusun kitab yang dapat menguatkan posisi (sanad) hadis-hadis dalam
                Shahih Muslim. Karya yang Ia susun berjudul al-Musnad al-Shahih al-Mukharraj ‘alā Shahīh
                Muslim.35 Kitab ini memuat 11870 hadis dengan jalur sanad yang berbeda dari hadis-hadis
                dalam Shahih Muslim
            </p>
            <p class="content">

                Kitab Shaih Muslim, di dalamnya terdiri dari 54 kitab (bagian). Setiap kitab tersebut di
                dalamnya terdiri dari bab-bab yang dibuat secara rinci dan diberi judul. Dalam setiap
                bab terdapat hadis-hadis dalam jumlah yang tidak terlalu banyak sehingga nyaris tidak
                ada pengulangan.
            </p>
            <p class="content">

                Shahih Mulim ini memiliki kekhasan, yaitu:
            </p>
            <ol>
                <li class="content-list-level-ll-normal">
                    memiliki muqaddimah, bagian ini berisi penjelasan ringkas terkait ilmu hadis;
                    susunannya sangat sistematis,
                </li>
                <li class="content-list-level-ll-normal">
                    susunannya sangat sistematis,
                </li>
                <li class="content-list-level-ll-normal">
                    pemilihan redaksi matan hadisnya sangat teliti dan cermat,
                </li>
                <li class="content-list-level-ll-normal">

                    seleksi dan akumulasi sanadnya sangat seksama tidak tertukar-tukar,
                </li>
                <li class="content-list-level-ll-normal">
                    penempatan hadis dalam bab-babnya sangat akurat, sehingga hampir tidak ada
                    pengulangan, dan
                </li>
                <li class="content-list-level-ll-normal">
                    bagusnya pengumpulan hadis yang senada dalam satu bab atau tema.
                </li>
            </ol>

                <li class="content-list-level-ul">
                    Sunan Tirmizi
                </li>
                <ol>

                </ol>



                <p class="content fw-bold">
                    Lanjut? Klik <span><a href="{{ route('user.kitab.kitab-kitab.primer3') }}"">Disini</a></span>
                </p>
    </div>




</body>

</html>
