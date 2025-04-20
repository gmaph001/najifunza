<?php
    $lev = $_GET['lev'];
    $class = $_GET['class'];
    $cat = $_GET['cat'];
    $subject = $_GET['subject'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NAJIFUNZA | Login/Sign Up</title>
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
              <li><a href="index.html">Home</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="students.html">Notes</a></li>
              <li><a href="exams.html">Exams</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="login.html" class="active">Login</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
        </div>
    </header>

    <main class="main">

        <div class="login-form">

            <!-- Login Form -->
            <?php echo "<form class='login' action='login3.php?cat=$cat&&lev=$lev&&class=$class&&subject=$subject' method='POST' enctype='multipart/form-data'>";?>
                <center><h2>Login</h2></center>
                <div class="inputs">
                    <label for="inputNanme4" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="inputNanme4" required>
                </div>
                <div class="inputs">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <div class="text-input">
                        <input type="password" name="password" class="form-control" id="Password1" required>
                        <img src="media/icons/hidden.png" class="icon" id="show1">
                    </div>
                </div>
                <div class="login-btns">
                    <button type="submit" name="login" class="btn submit">Login</button>
                    <button type="reset" class="btn signup">Sign Up</button>
                </div>
            </form>
            <!-- Login Form -->

            <!-- Sign Up Form -->
            <form class="register1" action="register.php" method="POST" enctype="multipart/form-data">
                <center><h2>Sign Up</h2></center>
                <div class="inputs">
                    <label for="inputNanme4" class="form-label">Username</label>
                    <input type="text" name="uname" class="form-control" id="inputNanme4" required>
                </div>
                <div class="inputs">
                    <label for="inputNanme4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputNanme4" required>
                </div>
                <div class="inputs">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <div class="text-input">
                        <input type="password" name="secret" class="form-control" id="Password2" required>
                        <img src="media/icons/hidden.png" class="icon" id="show2">
                    </div>
                </div>
                <div class="inputs">
                    <label for="inputPassword4" class="form-label">Confirm Password</label>
                    <div class="text-input">
                        <input type="password" class="form-control" id="Password3" required>
                        <img src="media/icons/hidden.png" class="icon" id="show3">
                    </div>
                </div>
                <div class="login-btns">
                    <button type="submit" name="register" class="btn submit" onclick="sajili()">Register</button>
                    <button type="reset" class="btn loginbtn">Login</button>
                </div>
            </form>
            <!-- Sign Up Form -->

        </div>

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
                Designed by <a href="https://softdelete.org/">Soft Delete</a>
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
    <script src="assets/js/login.js"></script>
    
</body>
    
</html>