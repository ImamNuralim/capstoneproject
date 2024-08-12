@extends('partials.navbar')
@section('surah')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <section class="container1" id="Pendahuluan">
      <div class="conten">
        <div class="container2 p-4">
          <div class="heading mt-5" id="DaftarSurah">
            <h1 class="judul-list">Daftar Surah</h1>
          </div>
          <div class="list-surah mt-5">

          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="terjemahan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close closed btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="quran"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn button closed p-2" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="noterjemahan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title jdl" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close closed btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mdlQuran d-flex flex-column align-items-center">
                    <!-- Konten modal -->
                </div>
                <div class="modal-footer">
                    <button id="closeModalButton" type="button" class="btn button closed p-2" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade opsi" id="opsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close btn-close-white closed" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <button type="button" class="btn button p-2 tarjim" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#terjemahan">Terjemah</button>
              <button type="button" class="btn button p-2 mt-3 notarjim" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#noterjemahan">Tanpa Terjemah</button>
          </div>
        </div>
      </div>
    </div>
    <section class="container2 p-4" id="KirimMasukan">

      <p class="mt-4 mb-5 introduction"> <span class="judul">Quran-ku</span> mengharapkan masukan dan saran dari anda supaya kami bisa tahu keluhan anda saat menggunakan aplikasi <span class="judul">Quran-ku</span>. Beri kami pesan yang sopan dan jelas supaya kami sigap dalam menanggapi keluhan anda.</p>
      <div class="alert d-none alert-success alert-dismissible fade show my-alert" role="alert">
           <strong>Terimakasih !</strong> Pesan anda sudah terkirim
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    </section>
    <footer id="foot" class="foot mt-5 d-flex justify-content-center align-items-center">
      <div class="container5 d-flex justify-content-center flex-wrap gap-5 p-4">
        <div class="sosial">
          <img src="{{ asset('assets/icon_footer.png') }}" alt="logo" class="footimg"/>
        </div>
        <div class="sosial">
          <p class="tit">Sosial Media</p>
          <a href="https://wa.me/6288216018165" target="_blank">Whatsapp</a>
          <a href="https://instagram.com/23.exs" target="_blank">Instagram</a>
          <a href="https://github.com/abrazax56" target="_blank">Github</a>
        </div>
        <div class="sosial">
          <p class="tit">Privasi</p>
          <a href="https://quran-api.santrikoding.com/api/surah" target="_blank">Ketentuan</a>
          <a href="https://quran-api.santrikoding.com/api/surah" target="_blank">API</a>
          <a href="https://quran-api.santrikoding.com/api/surah" target="_blank">Dokumen</a>
          <a href="https://quran-api.santrikoding.com/api/surah" target="_blank">Permintaan</a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
@endsection
