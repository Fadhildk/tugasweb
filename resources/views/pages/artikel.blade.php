<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/artikel.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  @include('layout.navbar')


 <div class="featured-article">
    <img src="{{ asset('images/kumpul.jpeg') }}" alt="Artikel Utama">
    <div class="featured-text">
      <span class="tag">TIPS</span>
      <h2>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h2>
    </div>
  </div>

  <div class="artikel-list">
    <div class="artikel-card">
      <img src="{{ asset('images/korona.png') }}" alt="Artikel 1">
      <div class="artikel-content">
        <h3>Hochschule für Technik und Wirtschaft Berlin</h3>
        <p>University of Applied Sciences. Dapatkan pengalaman belajar berkelas dunia di kampus terbaik Jerman...</p>
      </div>
    </div>

    <div class="artikel-card">
      <img src="{{ asset('images/htw.png') }}" alt="Artikel 2">
      <div class="artikel-content">
        <h3>Universitas Terbaik untuk Jurusan Teknik Informatika</h3>
        <p>Panduan lengkap universitas terbaik dunia bagi calon mahasiswa jurusan IT dan teknologi masa depan...</p>
      </div>
    </div>
  </div>
</section>
 
<section class="mitra-section">
  <h2 class="mitra-title">Mitra Kami</h2>

  <div class="mitra-list">
    <div class="mitra-card">
      <img src="{{ asset('images/artikel1.jpg') }}" alt="Mitra 1">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="{{ asset('images/artikel2.jpg') }}" alt="Mitra 2">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="{{ asset('images/artikel3.jpg') }}" alt="Mitra 3">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

    <div class="mitra-card">
      <img src="{{ asset('images/artikel4.jpg') }}" alt="Mitra 4">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>

     <div class="mitra-card">
      <img src="{{ asset('images/nurse2.jpg') }}" alt="Mitra 5">
      <div class="mitra-content">
        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        <p>Selasa, 18 Feb 2020 12:01 WIB</p>
      </div>
    </div>
  </div>
</section>

<div class="pagination">
  <button class="page-btn prev" aria-label="Previous Page">←</button>

  <div class="page-numbers">
    <button class="page-number active">1</button>
    <button class="page-number">2</button>
    <button class="page-number">3</button>
    <button class="page-number">4</button>
    <button class="page-number">5</button>
  </div>

  <button class="page-btn next" aria-label="Next Page">→</button>
</div>

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
