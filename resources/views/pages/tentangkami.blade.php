<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  @include('layout.navbar')

  <section class="tentang-kami">
    <div class="overlay"></div>
    <img src="{{ asset('images/studytour.png') }}"  alt="Tentang Kami">
    <div class="tentang-kami-content">
      <h1>TENTANG KAMI</h1>
    </div>
  </section>

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
      <a href="{{ url('/layanankami') }}" class="btn-layanan">LAYANAN KAMI</a>
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
