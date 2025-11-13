<!DOCTYPE html>
<html lang="tr">

<head>
    <?php 
    $pageTitle = "İletişim - BFN Yazılım";
    $pageDescription = "BFN ile iletişime geçin. Telefon: +90 534 0543044, E-posta: info@bfn.tr. İstanbul, Türkiye.";
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
                <li class="current">İletişim</li>
              </ol>
            </nav>
            <h1>İletişim</h1>
          </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adres</h3>
                  <p>Küçükbakkalköy Mah. Gümüş Sokak No:1</p>
                  <p>Daire:2 Kat:1 İstanbul, Türkiye</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Telefon</h3>
                  <p><a href="tel:+905340543044">+90 534 0543044</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>E-posta</h3>
                  <p><a href="mailto:info@bfn.tr">info@bfn.tr</a></p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.9876543210123!2d29.0833333!3d41.0166667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDAxJzAwLjAiTiAyOcKwMDUnMDAuMCJF!5e0!3m2!1str!2str!4v1234567890123!5m2!1str!2str" 
                frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Google Maps -->

              <div class="col-lg-6">
                <form action="v2/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                  <div class="row gy-4">

                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Adınız" required="">
                    </div>

                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="E-posta Adresiniz" required="">
                    </div>

                    <div class="col-md-12">
                      <input type="text" class="form-control" name="subject" placeholder="Konu" required="">
                    </div>

                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Mesajınız" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                      <div class="loading">Yükleniyor</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Mesajınız gönderildi. Teşekkür ederiz!</div>

                      <button type="submit">Mesaj Gönder</button>
                    </div>

                  </div>
                </form>
              </div><!-- End Contact Form -->

            </div>

            <!-- Additional Contact Info -->
            <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center p-4 light-background">
                  <h3 class="mb-3">Sosyal Medya</h3>
                  <div class="social-links d-flex">
                    <a href="https://github.com/bfn-yazilim" target="_blank" class="me-3"><i class="bi bi-github"></i> GitHub</a>
                    <a href="https://soneracar.bfn.tr" target="_blank"><i class="bi bi-person-circle"></i> Soner Acar</a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </section><!-- /Contact Section -->

    </main>

    <?php include('_footer.php') ?>
</body>

</html>