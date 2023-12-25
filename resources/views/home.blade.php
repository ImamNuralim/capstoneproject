@extends('layouts/main')
<div class="hero-container pt-5">
  <div class="hero pt-5"></div>
  <div class="hero-text">
  <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>
    <p style="font-family: Segoe UI; font-size: 20px; font-weight: 500;">Selamat Datang di</p>
    <h1>PERHUTANI KPH KENDAL</h1>
  </div>
  <style>
    .hero-container {
      height: 100vh;
      width: 100%;
      overflow: hidden;
      position: relative;
      margin-bottom: 20px;
    }
    .hero {
      background: url('/img/curugsewu.jpeg') no-repeat center center;
      background-size: cover;
      filter: brightness(30%);
      height: 100%;
      width: 100%;
      padding: 40px;
      transition: transform 2s;
    }
    .hero:hover {
      transform: scale(1.15);
    }
    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
    h1 {
      font-size: 20px;
      font-weight: 800;
      font-family: "Segoe UI";
      color: #fff;
    }
  </style>
</div>

<section class="container-fluid py-4">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col d-flex align-items-center">
        <div class="info">
          <h2 class="mb-4 fw-bold" >Visi</h2>
            <h5 class="fw-bold mb-4" style="text-align: justify;">Menjadi Perusahaan Pengelola Hutan Berkelanjutan dan Bermanfaat Bagi Masyarakat</h5>
            <div class="desc" style="text-align: justify;">PERHUTANI mendedikasikan diri bagi Indonesia dengan kemampuan maksimal, 
              bersinergi dengan semua pihak, mengikuti perkembangan dunia, demi memegang teguh kepercayaan yang diberikan.</div>
        <div class="mt-4">
          <h2 class="mb-4 fw-bold">Misi</h2>
            <ul style="text-align: justify;">
            <li>Mengelola Sumberdaya Hutan Secara Lestari</li>
            <li>Peduli Kepada Kepentingan Masyarakat dan Lingkungan</li>
            <li>Mengoptimalkan Bisnis Kehutanan dengan Prinsip Good Corporate Governance</li>
            </ul>
        </div>
        </div>
      <!--<div class="mt-auto">
        <a href="https://youtu.be/jf7C4p7RpXo" data-fancybox>
          <img src="https://www.perhutani.co.id/wp-content/uploads/2022/04/perhutani-profil-perusahaan-1024x450.png" alt="" class="w-100">
        </a>
      </div> -->
      </div>
      <div class="col-md-5 align-self-end">
        <style>

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
          }

          .activee {
            background-color: #006342;
          }

          /* Fading animation */
          .fade {
            animation-name: fade;
            animation-duration: 5s;
          }

          @keyframes fade {
            from {opacity: .5} 
            to {opacity: 1}
          }

          
          </style>
          
          <body>

          <div class="slideshow-container">

          <div class="mySlides fade">
            <img src="/img/curugsewu1.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <img src="/img/hutanboja.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <img src="/img/persemaiandurenombo.jpg" style="width:100%">
          </div>

          </div>
          <br>

          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>

          <script>
          let slideIndex = 0;
          showSlides();

          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" activee", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " activee";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
          }
          </script>
      </div>								
    </div>
    <!--<div class="row pt-5">
      <div class="row pb-3 border-dark col-lg-6">
        <iframe width="800" height="300" src="https://www.youtube.com/embed/szR9NFf4x88" title="Introduction" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="text-center col-lg-6">
        <h2>Visi</h2>
          <p class="fz">"Menjadi Perusahaan Pengelola Hutan Berkelanjutan dan Bermanfaat Bagi Masyarakat"</p>
        <h2>Misi</h2>
          <ul class="list-unstyled fz">
            <li>Mengelola Sumberdaya Hutan Secara Lestari.</li>
            <li>Peduli Kepada Kepentingan Masyarakat dan Lingkungan.</li>
            <li>Mengoptimalkan Bisnis Kehutanan dengan Prinsip Good Corporate Governance.</li>
          </ul>
      </div>
    </div>-->
  </div>
</section>

<section class="bgimage" >
  <div class="container-fluid" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class=" mb-4 fw-bold text-center text-light"> Tata Nilai Akhlak </h3>
      </div>
    </div>
    <img src="/img/akhlak.png" class= "rounded mx-auto d-block" style="max-width: 60%;">
  </div>
  <style>
    .bgimage {
    width:100%;
    height:400px;
    background: url('/img/fotbarbnw.jpg');
    background-repeat: no-repeat;
    background-position: center;;
    background-size:cover;
    background-color: #006342;
    background-blend-mode: multiply;
    opacity: 0.8;
    
    }
    .bgimage h3 {
      color:white;
      text-align: center;
      padding-top: 65;
      background-repeat: no-repeat;
      font-weight: 600;
    }
  </style>
</section>

<!-- <section style="background-color: #006342;" class="section-tata-nilai py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <h3 class=" mb-4 fw-bold text-center text-light"> Tata Nilai Akhlak </h3>
    </div>
    <div class="row justify-content-md-center pt-3">
      <img src="/img/akhlak.png" style="max-width: 80%;">
      
      <div class="wp-block-image">
      <figure class="aligncenter size-full"><img decoding="async" class="alignnone wp-image-220967 size-full" src="https://www.perhutani.co.id/wp-content/uploads/2022/10/akhlak-2.png" alt="" width="767" height="229" srcset="https://www.perhutani.co.id/wp-content/uploads/2022/10/akhlak-2.png 767w, https://www.perhutani.co.id/wp-content/uploads/2022/10/akhlak-2-300x90.png 300w" sizes="(max-width: 767px) 100vw, 767px" /></figure>
      </div>
      
    </div>
  </div>
</section> 


