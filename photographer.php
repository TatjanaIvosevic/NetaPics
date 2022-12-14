<?php
session_start();
require_once 'db_config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NetaPics - Fotografije</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <meta http-equiv="Content-Security-Policy"
          content="default-src 'self' 'unsafe-inline'; style-src 'self' fonts.googleapis.com 'unsafe-inline'; font-src 'self' data: fonts.gstatic.com;">
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
  <link href="assets/css/main.css" rel="stylesheet"
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>NetaPics</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="index.php">Po??etna</a></li>
            <li><a href="about.php">O nama</a></li>
            <li><a href="photographer.php" class="active">Fotografije</a></li>
            <?php
            if (isset($_SESSION["id_user"])) {
                echo "<li><a href='profile.php'>Moj profil</a></li>";
                echo "<li style='color: white; margin-left: 60px;'>".$_SESSION['username']."</li>";
                echo "<li><a class='get-a-quote' style='margin-left: 10px;' href='logout.php'>Odjavi se</a></li>";
            } else {
                echo "<li><a class='get-a-quote' href='login.php'>Prijavi se</a></li>";
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
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/pexels-lisa-5653734.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Fotografije</h2>
              <p>U??inite uspomene ve??nim</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Po??etna</a></li>
            <li>Fotografije</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Sve fotografije</span>
          <h2>Sve fotografije</h2>

        </div>

        <div class="row gy-4">
            <?php
            $sql = "SELECT * FROM images";
            $query = mysqli_query($connection, $sql);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $id_user = $_SESSION['id_user'] ?? '';
            ?>
            <?php
            foreach ($data as $item) {
                echo '
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="'.$item['image'].'" alt="" class="img-fluid">
              </div>              
               ';
                if($id_user)
                    echo '<h3 style="cursor: pointer" onclick="window.location.href = \'download.php?id='.$item['id'].'\'"><a align="center" style="background: var(--color-primary); padding: 8px 20px; margin-left: 100px; margin-right: 100px; border-radius: 4px; color: #fff;">Preuzmi</a></h3>';
            echo '</div>
          </div><!-- End Card Item -->
                ';
            }
            ?>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
          <span>NetaPics</span>
        </a>
        <p>Stvaramo svet lep??im mestom</p>
        <div class="social-links d-flex mt-4">
          <a href="https://www.youtube.com/c/MarkMcGeePhotos" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="https://www.instagram.com/_sky__photography/" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Korisni linkovi</h4>
        <ul>
            <li><a href="index.php">Po??etna</a></li>
            <li><a href="about.php">O nama</a></li>
            <li><a href="photographer.php">Fotografije</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Kontaktiraj nas</h4>
        <p>
          ??trosmajerova 27 <br>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
