@extends('partials.navbar')
@section('home')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-2 kategori sticky-top">
                <h3 style="padding: 1.5px;">Kategori</h3>

                <li href="" style="list-style: none; padding:2px ">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Sholat
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Nikah
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Puasa
                    </a>
                </li>
                <li href="" style="list-style: none; padding:2px">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6z" />
                            <path d="M14 4h6v6h-6z" />
                            <path d="M4 14h6v6h-6z" />
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        Zakat
                    </a>
                </li>

            </div>
            <div class="col-lg-8 content card-post col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="text" class="form-control form-control-rounded"
                                    placeholder="What do you want to ask or share?" type="button" data-bs-toggle="modal"
                                    data-bs-target="#askQuestionModal">
                                <div class="row mt-3" style="justify-content: center">
                                    <div class="col-4">
                                        <button class="btn btn-ghost-secondary w-100 btn-pill" type="button"
                                            data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                </path>
                                                <path
                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                </path>
                                                <path d="M16 5l3 3"></path>
                                            </svg>
                                            Post
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-ghost-secondary w-100 btn-pill" type="button"
                                            data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-message-question" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 9h8"></path>
                                                <path d="M8 13h6"></path>
                                                <path
                                                    d="M14 18h-1l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5">
                                                </path>
                                                <path d="M19 22v.01"></path>
                                                <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483">
                                                </path>
                                            </svg>
                                            Jawab
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $from = 'home';
                @endphp


                @include('user.answer')

                {{-- <div class="mb-4">
                    @foreach ($answers as $answer)
                        <livewire:user.answer :$answer wire:key="{{ $answer->id }}" :$from />
                    @endforeach
                </div> --}}
            </div>


            <div class="modal" id="askQuestionModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form id="questionForm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Postingan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="kategori1">
                                    <div class="drop-down">
                                        <select class="form-control" name="category" id="category" required>
                                            <option value="">Pilih kategori</option>
                                            <option value="category1">Sholat</option>
                                            <option value="category2">Nikah</option>
                                            <option value="category3">Puasa</option>
                                            <option value="category4">Zakat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control1" placeholder="Tuliskan sesuatu..." aria-label="default input example"></textarea>
                                </div>
                                <div class="media">
                                    <!-- Input file disembunyikan dengan multiple -->
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"
                                        style="display: none;" multiple />
                                    <!-- Ikon pengganti yang akan ditampilkan -->
                                    <button id="uploadButton" class="icon-button" aria-label="Upload Images">
                                        <!-- Tambahkan ikon Tabler di sini -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path
                                                    d="M15 8h.01M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z" />
                                                <path d="m3 16l5-5c.928-.893 2.072-.893 3 0l5 5" />
                                                <path d="m14 14l1-1c.928-.893 2.072-.893 3 0l3 3" />
                                            </g>
                                        </svg>

                                    </button>
                                </div>
                                <!-- Tempat untuk menampilkan pratinjau gambar -->
                                <div id="preview" class="image-preview"></div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-pill">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col-lg-1 call-to-action ">
                <h3>Iklan</h3>
                <ul class="list-group ">
                    <li class="list-group-item">
                        <img src="{{ asset('img/alquran.png') }}" class="img-fluid"
                            style="max-width: 30%; height: auto;">
                        <a href="#" data-toggle="modal" data-target="#product1Modal"
                            style="text-decoration:none;">Dapatkan Al-Quran & Terjemahan
                        </a>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/alquran.png') }}" class="img-fluid"
                            style="max-width: 30%; height: auto;">
                        <a href="#" data-toggle="modal" data-target="#product1Modal"
                            style="text-decoration:none;">Dapatkan Al-Quran & Terjemahan
                        </a>
                    </li>
                    <li class="list-group-item">
                        <img src="{{ asset('img/alquran.png') }}" class="img-fluid"
                            style="max-width: 30%; height: auto;">
                        <a href="#" data-toggle="modal" data-target="#product1Modal"
                            style="text-decoration:none;">Dapatkan Al-Quran & Terjemahan
                        </a>
                    </li>
                </ul>



                <!-- Modal Produk 1 -->
                <div class="modal fade" id="product1Modal" tabindex="-1" role="dialog"
                    aria-labelledby="product1ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="product1ModalLabel">Produk 1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="border:none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3 style="margin-left: ">Order Al-Quran dengan Terjemahan</h3>
                                <br>
                                <p>Deskripsi</p>
                                <p style="margin-left: ">Harga: Rp 100.000</p>
                            </div>
                            <div class="modal-footer">
                                <a href="https://wa.me/6281234567890?text=Saya%20ingin%20memesan%20Produk%201"
                                    class="btn btn-success">Order via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Isi call to action di sini -->
            </div>
        </div>
    </div>
    <script>
        document.getElementById('uploadButton').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah pengiriman form
            document.getElementById('avatar').click(); // Memicu klik pada input file
        });

        document.getElementById('avatar').addEventListener('change', function(event) {
            const preview = document.getElementById('preview');
            const files = event.target.files;

            // Hapus semua pratinjau sebelumnya
            preview.innerHTML = '';

            // Iterasi melalui setiap file
            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Buat elemen img baru dan tetapkan sumbernya ke hasil pembacaan
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                }
            }
        });
        <script>
  document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
      var kategori = document.querySelector('.kategori.sticky-top');
      var stickyOffset = kategori.offsetTop;

      console.log('Posisi Scroll:', window.pageYOffset);
      console.log('Offset Elemen:', stickyOffset);

      if (window.pageYOffset > stickyOffset) {
        kategori.classList.add('sticky-active');
        console.log('Menambahkan kelas sticky-active');
      } else {
        kategori.classList.remove('sticky-active');
        console.log('Menghapus kelas sticky-active');
      }
    });
  });
</script>

    </script>
@endsection
