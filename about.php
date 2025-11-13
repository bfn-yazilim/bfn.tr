<!DOCTYPE html>
<html lang="tr">
<head>
    <?php 
    $pageTitle = "Hakkında - BFN Yazılım Projeleri";
    $pageDescription = "BFN hakkında bilgi edinin. Soner Acar tarafından geliştirilen oyunlar, uygulamalar ve eğitici web geliştirme içerikleri.";
    ?>
    <title><?php echo $pageTitle; ?></title>
    <?php include('_head.php') ?>
</head>
<body class="index-page">
  <?php include('_header.php') ?>
  
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Anasayfa</a></li>
            <li class="current">Hakkında</li>
          </ol>
        </nav>
        <h1>Hakkında</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-4">
          
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">BFN Nedir?</p>
            <h3>Yazılım Projeleri ve Faydalı İçerikler</h3>
            <p class="fst-italic">
              bfn.tr alan adının altında alt alan adı olacak şekilde yaptığım ufak oyunları, uygulamaları, 
              eğitici notlarımı, blog türü yazıları eklemeyi planlıyorum.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Eğitici ve eğlenceli mantık oyunları</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Pratik web uygulamaları ve araçlar</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Web geliştirme notları ve örnekler</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Açık kaynak projeler ve paylaşımlar</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-images">
              <img src="assets/img/soner-acar.webp" class="img-fluid rounded" alt="Soner Acar" style="max-width: 400px;">
            </div>
            <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
              <h4>Misyonumuz</h4>
              <p>Umarım güzel ülkem adına, insanlık adına faydalı olur.</p>
              <p><strong>Soner Acar</strong></p>
              <p class="mb-0">Yazılım Geliştirici</p>
              <a href="https://soneracar.bfn.tr" target="_blank" class="btn btn-primary mt-3">
                <i class="bi bi-person-circle"></i> Profili Görüntüle
              </a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter" style="font-size: 48px; font-weight: bold; color: var(--accent-color);">5</span>
              <p>Aktif Proje</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter" style="font-size: 48px; font-weight: bold; color: var(--accent-color);">1</span>
              <p>Yapım Aşamasında</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter" style="font-size: 48px; font-weight: bold; color: var(--accent-color);">4</span>
              <p>Planlanan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span style="font-size: 48px; font-weight: bold; color: var(--accent-color);">∞</span>
              <p>Fikir</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Teknolojiler</h2>
          <p>Projelerde kullanılan teknolojiler ve araçlar</p>
        </div>

        <div class="row gy-4 justify-content-center">
          
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item text-center p-4">
              <i class="bi bi-filetype-html" style="font-size: 48px; color: #E34F26;"></i>
              <h4 class="mt-3">HTML5</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item text-center p-4">
              <i class="bi bi-filetype-css" style="font-size: 48px; color: #1572B6;"></i>
              <h4 class="mt-3">CSS3</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item text-center p-4">
              <i class="bi bi-filetype-js" style="font-size: 48px; color: #F7DF1E;"></i>
              <h4 class="mt-3">JavaScript</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item text-center p-4">
              <i class="bi bi-filetype-php" style="font-size: 48px; color: #777BB4;"></i>
              <h4 class="mt-3">PHP</h4>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Features Section -->

  </main>

  <?php include('_footer.php') ?>
</body>
</html>