  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hubungi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  @include('layout.navbar')

  <section id="hubungi-banner" class="hubungi-banner">
    <img src="{{ asset('images/becak.png') }}" alt="Hubungi Kami">
    <div class="hubungi-text">
      <h1>HUBUNGI KAMI</h1>
    </div>
  </section>

  <section class="hubungi-form">
    <h2>KIRIM PESAN</h2>

    <form action="{{ route('hubungi.kirim') }}" method="POST">
      @csrf

      <div class="form-row">
        <div class="form-group">
          <label for="nama">Nama*</label>
          <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
          <label for="email">Email*</label>
          <input type="email" id="email" name="email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="perusahaan">Perusahaan/Organisasi</label>
          <input type="text" id="perusahaan" name="perusahaan">
        </div>

        <div class="form-group">
          <label for="telepon">Telepon</label>
          <input type="text" id="telepon" name="telepon">
        </div>
      </div>

      <div class="form-group full">
        <label for="pesan">Isi Pesan*</label>
        <textarea id="pesan" name="pesan" rows="5" required></textarea>
      </div>

      <div class="bagian-submit">
        <div class="captcha-wrapper">
          <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
          @error('g-recaptcha-response')
            <small class="error-text">Captcha harus dicentang.</small>
          @enderror
        </div>

        <button type="submit" class="btn-kirim">KIRIM PESAN</button>
      </div>
    </form>
  </section>

  <hr class="garis-tipis">

  <section id="lokasi-kami" class="lokasi-kami">
    <h2>LOKASI KAMI</h2>
    <div class="alamat">
      <div>
        <h3>Kantor Pusat</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone: (+6285) 2867564052 - Fax: (+6285) 286754052</p>
        <p>Hotline: +628526754052 / +628526754052</p>
      </div>

      <div>
        <h3>Kantor Cabang</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone: (+6285) 2867564052 - Fax: (+6285) 286754052</p>
        <p>Hotline: +628526754052 / +628526754052</p>
      </div>
    </div>
  </section>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  @include('layout.footer')
</body>
</html>
