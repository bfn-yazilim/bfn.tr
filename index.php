<!DOCTYPE html>
<html lang="tr">
<head>
    <?php 
    $pageTitle = "BFN - Oyunlar, Uygulamalar ve Web Geliştirme Projeleri";
    $pageDescription = "Queens, Skyscrapers gibi mantık oyunları, haftalık takvim ve CSS layout örnekleri. Ücretsiz web uygulamaları ve eğitici içerikler.";
    ?>
    <title><?php echo $pageTitle; ?></title>
    <?php include('_head.php') ?>
</head>
<body class="index-page">
  <?php include('_header.php') ?>
  
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/soner-acar.webp" alt="BFN Hero Background">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Hoşgeldiniz <span>BFN</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Oyunlar, uygulamalar, eğitici notlar ve daha fazlası<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#projects" class="btn-get-started">Projeleri Keşfet</a>
            <a href="/about" class="btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-info-circle"></i><span>Hakkımızda</span></a>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="projects" class="featured-services section light-background">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Aktif Projeler</h2>
          <p>Yayında olan projelerimize göz atın</p>
        </div>

        <div class="row gy-4">
          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-grid-3x3"></i></div>
              <div>
                <h4 class="title"><a href="https://queens.bfn.tr" target="_blank" class="stretched-link">Queens Oyunu</a></h4>
                <p class="description">Klasik şatranç temelli mantık oyunu. N-Queens problemini çözün.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-building"></i></div>
              <div>
                <h4 class="title"><a href="https://skyscrapers.bfn.tr" target="_blank" class="stretched-link">Skyscrapers Oyunu</a></h4>
                <p class="description">Gökdelen yerleştirme mantık oyunu. Görüş açısına göre binaları yerleştirin.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-person-circle"></i></div>
              <div>
                <h4 class="title"><a href="https://soneracar.bfn.tr" target="_blank" class="stretched-link">Soner Acar</a></h4>
                <p class="description">Kişisel profil sayfası ve portföy.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-layout-text-window"></i></div>
              <div>
                <h4 class="title"><a href="https://layout.bfn.tr" target="_blank" class="stretched-link">Layout CSS</a></h4>
                <p class="description">CSS layout örnekleri ve eğitici içerikler.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar-week"></i></div>
              <div>
                <h4 class="title"><a href="https://weekly-calendar.bfn.tr" target="_blank" class="stretched-link">Haftalık Takvim</a></h4>
                <p class="description">Pratik haftalık takvim uygulaması.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Featured Services Section -->

    <!-- In Progress Section -->
    <section id="inprogress" class="services section">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Yapım Aşamasında</h2>
          <p>Üzerinde çalıştığımız yeni projeler</p>
        </div>

        <div class="row g-5 justify-content-center">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-music-note-beamed icon"></i>
              <div>
                <h3>Tango</h3>
                <p>Yeni bir mantık oyunu projesi. Yakında sizlerle.</p>
                <span class="badge bg-warning text-dark">Geliştiriliyor</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /In Progress Section -->

    <!-- Planned Section -->
    <section id="planned" class="more-features section light-background">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Planlanan Projeler</h2>
          <p>Yakın gelecekte hayata geçireceğimiz fikirler</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item text-center">
              <i class="bi bi-file-earmark-text" style="font-size: 48px; color: var(--accent-color);"></i>
              <h4 class="mt-3">Docs</h4>
              <p>Dokümantasyon ve notlar</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item text-center">
              <i class="bi bi-link-45deg" style="font-size: 48px; color: var(--accent-color);"></i>
              <h4 class="mt-3">Links</h4>
              <p>Faydalı bağlantılar koleksiyonu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item text-center">
              <i class="bi bi-palette" style="font-size: 48px; color: var(--accent-color);"></i>
              <h4 class="mt-3">UI</h4>
              <p>UI/UX tasarım örnekleri</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item text-center">
              <i class="bi bi-newspaper" style="font-size: 48px; color: var(--accent-color);"></i>
              <h4 class="mt-3">Haber</h4>
              <p>Teknoloji haberleri ve blog</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Planned Section -->

  </main>

  <?php include('_footer.php') ?>
</body>
</html>