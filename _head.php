    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'BFN - Oyunlar, uygulamalar, eğitici notlar ve blog yazıları. Soner Acar\'ın kişisel projeleri ve yazılım çalışmaları.'; ?>">
    <meta name="keywords" content="bfn, oyun, uygulama, yazılım, web geliştirme, queens, skyscrapers, soner acar, mantık oyunları, haftalık takvim, css layout">
    <meta name="author" content="Soner Acar">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">
    <meta name="geo.region" content="TR-34">
    <meta name="geo.placename" content="İstanbul">
    <meta name="theme-color" content="#388da8">
    <link rel="canonical" href="https://bfn.tr<?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Favicons -->
    <link rel="icon" href="/v2/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="/v2/assets/img/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.json">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bfn.tr<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'BFN - Oyunlar, Uygulamalar ve Web Geliştirme'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'BFN - Oyunlar, uygulamalar, eğitici notlar ve blog yazıları. Soner Acar\'ın kişisel projeleri ve yazılım çalışmaları.'; ?>">
    <meta property="og:image" content="https://bfn.tr/assets/img/soner-acar.webp">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:site_name" content="BFN">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://bfn.tr<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'BFN - Oyunlar, Uygulamalar ve Web Geliştirme'; ?>">
    <meta name="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'BFN - Oyunlar, uygulamalar, eğitici notlar ve blog yazıları. Soner Acar\'ın kişisel projeleri ve yazılım çalışmaları.'; ?>">
    <meta name="twitter:image" content="https://bfn.tr/assets/img/soner-acar.webp">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="v2/assets/vendor/bootstrap/css/bootstrap.min.css?v=1.0.1" rel="stylesheet">
    <link href="v2/assets/vendor/bootstrap-icons/bootstrap-icons.css?v=1.0.1" rel="stylesheet">
    <link href="v2/assets/vendor/aos/aos.css?v=1.0.1" rel="stylesheet">
    <link href="v2/assets/vendor/glightbox/css/glightbox.min.css?v=1.0.1" rel="stylesheet">
    <link href="v2/assets/vendor/swiper/swiper-bundle.min.css?v=1.0.1" rel="stylesheet">
    
    <!-- Main CSS File -->
    <link href="v2/assets/css/main.css?v=1.0.1" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/custom.css?v=1.0.1" rel="stylesheet">
    
    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1296049589985967"
     crossorigin="anonymous"></script>
     
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0BF6Y6J8VK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0BF6Y6J8VK');
    </script>
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "BFN",
      "url": "https://bfn.tr",
      "logo": "https://bfn.tr/assets/img/soner-acar.webp",
      "description": "Oyunlar, uygulamalar, eğitici notlar ve blog yazıları. Web geliştirme projeleri.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Küçükbakkalköy Mah. Gümüş Sokak No:1 Daire:2 Kat:1",
        "addressLocality": "İstanbul",
        "addressCountry": "TR"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+90-534-0543044",
        "contactType": "Customer Service",
        "email": "info@bfn.tr",
        "availableLanguage": "Turkish"
      },
      "founder": {
        "@type": "Person",
        "name": "Soner Acar",
        "url": "https://soneracar.bfn.tr"
      },
      "sameAs": [
        "https://github.com/bfn-yazilim",
        "https://soneracar.bfn.tr"
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "BFN",
      "url": "https://bfn.tr",
      "description": "Oyunlar, uygulamalar, eğitici notlar ve web geliştirme projeleri",
      "inLanguage": "tr-TR",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://bfn.tr/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>