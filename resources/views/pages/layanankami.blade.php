<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/layanankami.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  @include('layout.navbar')


<body>
 <section class="layanan-kami">
  <div class="overlay"></div>
  <img src="{{ asset('images/gatescambride.png') }}" alt="Layanan Kami">
  <div class="layanan-kami-content">
  <h1>LAYANAN KAMI</h1>
  </div>
</section>

<section id="layanan-kami" class="services-section py-5">
  <div class="container text-center">
    <div class="services-grid">

      <div class="service-card">
        <img src="{{ asset('images/bachelor.jpg') }}" alt="Studi S1 - Bachelor">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Studi S1 - Bachelor</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('images/master.png') }}" alt="Studi S2 - Master">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Studi S2 - Master</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3 - Ph.D">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Studi S3 - Ph.D</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('images/basing.png') }}" alt="Kursus Bahasa Asing">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Kursus Bahasa Asing</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('images/tour.png') }}" alt="Study Tour">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Study Tour</p>
      </div>

      <div class="service-card">
        <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
        <div class="overlay"></div>
        <span class="line"></span>
        <p>Ausbildung</p>
      </div>

    </div>
  </div>
</section>

    <section class="hubungi-kami">
  <hr class="pemisah" />
  <h2>HUBUNGI KAMI</h2>
  <h3>KANTOR PUSAT</h3>
  <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
  <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
  <p>Hotline: +6281519040071 / +62811998167</p>
  
<div class="tombol-kontak">
  <a href="{{ url('/hubungi#lokasi-kami') }}" class="btn-gradient">LOKASI KAMI</a>
  <a href="{{ url('/hubungi#hubungi-banner') }}" class="btn-outline">KIRIM PESAN</a>
</div>

  </section>
@include('layout.footer')
</body>
</html>