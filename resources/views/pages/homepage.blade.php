<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  @include('layout.navbar')

  <section class="hero">
    <img src="{{ asset('images/7645A600-864F-4BBF-9222-C91C42B82980.png') }}" alt="Gedung" />
    <div class="overlay">
      <h1>INGIN KULIAH DAN BERKARIR<br />DI LUAR NEGERI?</h1>
      <button>SELENGKAPNYA <i class="fa fa-angle-down"></i></button>
    </div>
  </section>

  {{-- Tentang Kami --}}
  <section class="tentang">
    <h2>TENTANG KAMI</h2>
    <p>INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.</p>
    <div class="garis"></div>
  </section>

  {{-- Layanan Kami --}}
  <section id="layanan-kami" class="services-section py-5">
    <div class="container text-center">
      <h2 class="services-title mb-5">LAYANAN KAMI</h2>
      <div class="services-grid">
        <div class="service-card">
          <img src="{{ asset('images/bachelor.jpg') }}" alt="Studi S1 - Bachelor">
          <div class="overlay"></div>
          <p>Studi S1 - Bachelor</p>
        </div>
        <div class="service-card">
          <img src="{{ asset('images/master.png') }}" alt="Studi S2 - Master">
          <div class="overlay"></div>
          <p>Studi S2 - Master</p>
        </div>
        <div class="service-card">
          <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3 - Ph.D">
          <div class="overlay"></div>
          <p>Studi S3 - Ph.D</p>
        </div>
        <div class="service-card">
          <img src="{{ asset('images/basing.png') }}" alt="Kursus Bahasa Asing">
          <div class="overlay"></div>
          <p>Kursus Bahasa Asing</p>
        </div>
        <div class="service-card">
          <img src="{{ asset('images/tour.png') }}" alt="Study Tour">
          <div class="overlay"></div>
          <p>Study Tour</p>
        </div>
        <div class="service-card">
          <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
          <div class="overlay"></div>
          <p>Ausbildung</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Mitra Kami --}}
  <section class="mitra">
    <h2>MITRA KAMI</h2>
    <div class="mitra-grid">
      <div class="mitra-card">
        <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/adrew.png') }}" alt="St. Andrew's College">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
      </div>
      <div class="mitra-card">
        <img src="{{ asset('images/studygroup.png') }}" alt="StudyGroup">
      </div>
    </div>

    <div class="konseling-banner">
      <div class="banner-text">
        <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
        <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
      </div>
      <button class="banner-btn">MULAI KONSULTASI <i class="fa fa-angle-down"></i></button>
    </div>
  </section>

  {{-- Artikel Terbaru --}}
  <section class="artikel-terbaru">
    <h2>Artikel Terbaru</h2>
    <div class="artikel-grid">
      <div class="artikel-item">
        <img src="{{ asset('images/studijerman.png') }}" alt="5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman">
        <p>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
      </div>
      <div class="artikel-item">
        <img src="{{ asset('images/korona.png') }}" alt="Uni Eropa Menghadapi Virus Korona">
        <p>Uni Eropa Menghadapi Virus Korona</p>
      </div>
      <div class="artikel-item">
        <img src="{{ asset('images/bahasajerman.png') }}" alt="Belajar Bahasa Jerman Bersama Goethe Insitut">
        <p>Belajar Bahasa Jerman Bersama Goethe Insitut</p>
      </div>
      <div class="artikel-item">
        <img src="{{ asset('images/gatescambride.png') }}" alt="Apa Itu Gates Cambridge? Yuk Cari Tahu">
        <p>Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
      </div>
    </div>

    <div class="artikel-btn-container">
    <button class="btn-artikel">ARTIKEL LAINNYA</button>
  </div>
  </section>

  {{-- Hubungi Kami --}}
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
