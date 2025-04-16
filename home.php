<?php
    require "connect.php";
    require "address.php";
    // require "timer.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM admin";
    $query2 = "SELECT * FROM users";

    $result = mysqli_query($db, $query);
    $result2 = mysqli_query($db, $query2);

    if(mysqli_num_rows($result) > 0){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $dp = $row['photo'];
                $username = $row['username'];
                break;
            }
        }
    }
    else{
        if($result2){
            for($i=0; $i<mysqli_num_rows($result2); $i++){
                $row = mysqli_fetch_array($result2);

                if($id === $row['userkey']){
                    $dp = $row['photo'];
                    $username = $row['username'];
                    break;
                }
            }
        }
        else{
            header("location:login.html");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NAJIFUNZA | Home</title>
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
                    <?php
                        echo 
                        "
                            <li><a href='home.php?id=$id' class='active'>Home</a></li>
                            <li><a href='news.php?id=$id'>News</a></li>
                            <li><a href='students.html'>Notes</a></li>
                            <li><a href='exams.ph'?id=$id'>Exams</a></li>
                            <li><a href='contact.php?id=$id'>Contact</a></li>
                            <li><a href='classes.php?id=$id'>My Classes</a></li>
                            <li><a href='logout.php?id=$id' class='logout-btn'>Logout</a></li>
                        ";
                    ?>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <?php echo "<a href='check_user.php?id=$id'><img src='$dp' class='dp'></a>"?>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <?php echo "<h2>Welcome, <span class='user'>$username</span></h2>";?>
                <p>
                    Save your educational materials and access them anywhere, anytime.
                </p>
                <div class="d-flex">
                <a href="#options" class="btn-get-started">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="media/images/najifunza.png" class="img-fluid" alt="Najifunza Logo">
            </div>
            </div>
        </div>

        <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200" id="options">
            <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-easel"></i></div>
                    <?php echo "<h4 class='title'><a href='teachers.php?id=$id#options' class='stretched-link'>Teachers</a></h4>";?>
                </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-person"></i></div>
                    <?php echo "<h4 class='title'><a href='students.php?id=$id#options' class='stretched-link'>Students</a></h4>";?>
                </div>
                </div><!--End Icon Box -->
                
            </div>
            </div>
        </div>

        </section>

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

</body>

</html>