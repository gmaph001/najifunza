<?php
  require "connect.php";

  $class = $_GET['class'];
  $subject = $_GET['subject'];

  $somo = strtolower($subject);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>NAJIFUNZA | Subject</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="media/images/najifunza-logo.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename"><span>N</span>ajifunza</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="students.html">Notes</a></li>
          <li><a href="exams.html">Exams</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.html">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                  <?php echo "<h2>$subject</h2>";?>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                  <?php echo "<img src='media/images/$somo.jpg' class='somo-pic' alt='$subject Pic'><br><br>";?>
                </div>
            </div>
            </div>
        </div>
  
    </section><!-- /Hero Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section" id="pricing">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>TOPICS</h2>
            <div><span>Check Our</span> <span class="description-title">Topics</span></div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pricing-tem">
                  <h3 style="color: #20c997;">MR. LIMBU</h3>
                  <div class="icon">
                      <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                  </div>
                  <ul>
                      <h2>Description</h2>
                      <li>This is chapter 2 Computer Science notes!</li>
                  </ul>
                  <a href="#" class="btn-buy">Read Now</a><br>
                  <a href="#" class="btn-download">Download Now</a>
                  </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="#" class="btn-buy">Read Now</a><br>
                <a href="#" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="#" class="btn-buy">Read Now</a><br>
                <a href="#" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="media/documents/notes/C++ notes.pdf" class="btn-buy" target="_blank">Read Now</a><br>
                <a href="media/documents/notes/C++ notes.pdf" download="C++ Notes" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="media/documents/notes/C++ notes.pdf" class="btn-buy" target="_blank">Read Now</a><br>
                <a href="media/documents/notes/C++ notes.pdf" download="C++ Notes" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="media/documents/notes/C++ notes.pdf" class="btn-buy" target="_blank">Read Now</a><br>
                <a href="media/documents/notes/C++ notes.pdf" download="C++ Notes" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                <h3 style="color: #20c997;">MR. LIMBU</h3>
                <div class="icon">
                    <i class="bi" style="color: #20c997;"><img src="media/images/prof_pics/login.png" class="profile"></i>
                </div>
                <ul>
                    <h2>Description</h2>
                    <li>This is chapter 2 Computer Science notes!</li>
                </ul>
                <a href="media/documents/notes/C++ notes.pdf" class="btn-buy" target="_blank">Read Now</a><br>
                <a href="media/documents/notes/C++ notes.pdf" download="C++ Notes" class="btn-download">Download Now</a>
                </div>
              </div><!-- End Pricing Item -->

            </div><!-- End pricing row -->

        </div>

    </section><!-- /Pricing Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
    <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Najifunza</strong> <span>All Rights Reserved</span></p>
    </div>
    <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/"></a>
    </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>