<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami | Inaklug</title>

  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}">
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
        <a href="/tentangkami" class="active">Tentang Kami</a>
        <a href="/layanankami">Layanan Kami</a>
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
  <section class="tentang-kami">
    <div class="overlay"></div>
    <img src="{{ asset('images/studytour.png') }}"  alt="Tentang Kami">
    <div class="tentang-kami-content">
      <h1>TENTANG KAMI</h1>
    </div>
  </section>
</body>

 <section class="profil-section">
    <div class="profil-content">
      <h1>PROFIL</h1>
      <p>
        Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional 
        yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para 
        anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
      </p>
    </div>

    <div class="visi-misi-container">
      <div class="card">
        <img src="{{ asset('images/visi.png') }}"alt="Visi">
        <h2>VISI</h2>
        <p>
         Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional
         untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan
         yang tangguh, mandiri, dan profesional.
        </p>
      </div>
      <div class="card">
        <img src="{{ asset('images/misi.png') }}" alt="Misi">
        <h2>MISI</h2>
        <p>
        Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi di lebih dari
         25 negara maju di dunia dengan layanan yang profesional.
        </p>
        <p>
        Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari berbagai
        aspek, baik aspek sosial, budaya, maupun pendidikan.
        </p>
      </div>
    </div>

    <div class="btn-layanan-container">
      <a href="#" class="btn-layanan">LAYANAN KAMI</a>
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
