@section('footer')
<style>
/* Footer Styling */
.footers {
    background-color: #f8f9fa;
    color: #333;
    padding: 2rem 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow pada seluruh footer */
}

.footers .container2 {
    max-width: 1200px;
}

.footers-logo img {
    max-width: 100%;
    height: auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow pada logo */
}

.footers-info {
    font-size: 0.9rem;
    line-height: 1.5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Shadow ringan pada teks info */
    padding: 10px;
    border-radius: 5px; /* Sedikit lengkung pada sudut */
    text-align: left; /* Rata kiri */
}

.social-icons a {
    margin-right: 0.5rem;
    color: #333;
    transition: color 0.3s ease, transform 0.3s ease;
}

.social-icons a:hover {
    color: #007bff;
    transform: translateY(-2px); /* Efek naik saat hover */
}

.footers h5 {
    font-size: 1.1rem;
    margin-bottom: 1rem;
    text-align: left; /* Rata kiri */
}

.footers ul {
    list-style: none;
    padding: 0;
}

.footers ul li {
    margin-bottom: 0.5rem;
    text-align: left; /* Rata kiri */
}

.footers ul li a {
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); /* Shadow ringan pada link */
    padding: 5px;
    border-radius: 3px;
}

.footers ul li a:hover {
    color: #007bff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow lebih besar saat hover */
}

.footers h3 {
    font-size: 1.3rem;
    margin-bottom: 1rem;
    text-align: left; /* Rata kiri */
}

@media (max-width: 768px) {
    .footers .row {
        flex-direction: column;
        align-items: flex-start; /* Rata kiri pada layout mobile */
    }

    .footers .col-md-4, .footers .col-md-5, .footers .col-md-3 {
        margin-bottom: 2rem;
        text-align: left; /* Rata kiri */
    }

    .footers h3, .footers h5 {
        text-align: left; /* Rata kiri */
    }

    .footers ul {
        padding: 0;
    }

    /* Membagi "Ulumul Hadis" menjadi dua kolom pada layar kecil */
    .footers .col-md-5 ul {
        display: grid;
        grid-template-columns: repeat(1, 1fr); /* Dua kolom */

    }
}


</style>
<section class="footers rounded-top pt-3 pb-3 back_colour_prim revert_container">
    <div class="container2 px-md-5">
      <div class="row justify-content-around gap-2">
        <div class="col-10 col-sm-10 col-md-4">
          <div class="footers-logo">
            <img src="{{ asset('img/logoTSII.png') }}" alt="Logo" style="width:15rem;">
          </div>
        </div>
        <div class="col-md-5 col-10 justify-content-center row">
          <div class="col-9 col-md-6 col-sm-6 mt-1">
            <h5>Ulumul Hadis</h5>
            <ul class="">
              <li><a href="/Musthalah-Al-Hadits/">Musthalah Hadis</a></li>
              <li><a href="/Sanad/">Sanad dan Matan</a></li>
              <li><a href="/Klasifikasi/">Klasifikasi</a></li>
              <li><a href="/cabang/">Cabang-Cabang</a></li>
              <li><a href="/kitab/">Kitab-Kitab</a></li>
              <li><a href="/pilihan/pilihan1/index.html">Hadis-Hadis Pilihan</a></li>
            </ul>
          </div>

        </div>

      </div>
    </div>
  </section>

