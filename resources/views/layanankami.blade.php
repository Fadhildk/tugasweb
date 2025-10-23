<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami | Inaklug</title>

  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layanankami.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
<body>
  <header>
    <div class="nav-container">
      <input type="checkbox" id="menu-toggle" />
      <div class="nav-left">
        <img src="{{ asset('images/inaklug.png') }}" alt="Logo" class="logo" />
        <span class="brand-name">Inaklug</span>
      </div>
      <nav class="nav-links">
        <a href="/">Home</a>
        <a href="/tentangkami">Tentang Kami</a>
        <a href="/layanankami"  class="active">Layanan Kami</a>
        <a href="#">Artikel</a>
        <a href="#">Hubungi Kami</a>
        <div class="mobile-search">
          <i class="fa fa-search"></i>
          <input type="text" placeholder="Ketik pencarian..." />
        </div>
      </nav>
      <div class="search-bar">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Ketik pencarian..." />
      </div>
      <a href="#" class="daftar-online">DAFTAR ON-LINE</a>
      <label for="menu-toggle" class="hamburger">
        <i class="fa fa-bars"></i>
      </label>
    </div>
  </header>
</body>

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
    <a href="#" class="btn-gradient">LOKASI KAMI</a>
    <a href="#" class="btn-outline">KIRIM PESAN</a>
  </div>
  </section>
  <footer class="footer">
    <p>Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
  </footer>

</body>
</html>