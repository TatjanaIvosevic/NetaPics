<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NetaPics - Prijavi se</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <h1>NetaPics</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="index.php" class="active">Početna</a></li>
            <li><a href="about.php">O nama</a></li>
            <li><a href="photographer.php">Fotografi</a></li>
            <?php
            if (isset($_SESSION["id_user"])) {
                echo "<li><a href='logout.php'>Odjavi se</a></li>";
            }
            ?>

        </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/pexels-lex-photography-1109543.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Prijava</h2>
               </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Početna</a></li>
            <li>Prijava</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form action="web.php" method="post" class="php-email-form">
              <h3 align="center">Prijava</h3>
              <p align="center">Nemaš nalog? <a href="registration.php">Klikni ovde da se registruješ.</a></p>
              <br>
              <div class="row gy-4">

                <div class="col-md-12">
                  <label>Korisničko ime:</label>
                  <input type="text" class="form-control" name="username" placeholder="Korisničko ime ili email" required>
                </div>

                <div class="col-md-12">
                  <label>Lozinka:</label>
                  <input type="password" class="form-control" name="password" placeholder="Lozinka" required>
                </div>


                  <input type="hidden" name="action" value="login">

                <div class="col-md-12 text-center">
                  <div class="loading">Učitavanje...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Uspešna prijava!</div>

                  <button type="submit">Prijavi se</button>
                </div>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>NetaPics</span>
        </a>
        <p>Stvaramo svet lepšim mestom</p>
        <div class="social-links d-flex mt-4">
          <a href="https://www.youtube.com/c/MarkMcGeePhotos" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="https://www.instagram.com/_sky__photography/" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Korisni linkovi</h4>
        <ul>
          <li><a href="index.html">Početna</a></li>
          <li><a href="about.html">O nama</a></li>
          <li><a href="photographer.html">Fotografi</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Kontaktiraj nas</h4>
        <p>
          Štrosmajerova 27 <br>
          Subotica<br>
          R. Srbija <br><br>
          <strong>Telefon:</strong> +381 555-11-22<br>
          <strong>Email:</strong> info@netapics.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>NetaPics</span></strong>. All Rights Reserved
    </div>
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>