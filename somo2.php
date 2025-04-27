<?php
    require "connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $lev = $_GET['lev'];

    $exist = false;

    $query = "SELECT * FROM admin";
    $query2 = "SELECT * FROM users";

    $result = mysqli_query($db, $query);
    $result2 = mysqli_query($db, $query2);

    if(mysqli_num_rows($result) > 0 || $result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $dp = $row['photo'];
                $username = $row['username'];
                $exist = true;
                break;
            }
        }
    }

    if(!$exist){
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
    }

    $lev = $_GET['lev'];
    $class = $_GET['class'];
    $cat = $_GET['cat'];
    $subject = strtoupper($_GET['subject']);

    $description = [];
    $poster = [];
    $posterID = [];
    $posterdp = [];
    $notes = [];
    $key = [];
    $size = 0;

    $query = "SELECT * FROM notes";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($cat === $row['category'] && $class === $row['class'] && $subject === $row['subject'] && $lev === $row['level']){
                $notes[$size] = $row['notes'];
                $poster[$size] = $row['poster'];
                $posterID[$size] = $row['poster_ID'];
                $description[$size] = $row['description'];
                $key[$size] = $row['notes_key'];

                $query2 = "SELECT * FROM admin";
                $result2 = mysqli_query($db, $query2);

                if($result2){
                    for($j=0; $j<mysqli_num_rows($result2); $j++){
                        $row = mysqli_fetch_array($result2);

                        if($posterID[$size] === $row['userkey']){
                            $posterdp[$size] = $row['photo'];
                        }
                    }
                }
                $size++;
            }
        }
    }

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

            <?php echo "<a href='home.php?id=$id' class='logo d-flex align-items-center'>";?>
                <h1 class="sitename"><span>N</span>ajifunza</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <?php
                        echo 
                        "
                            <li><a href='home.php?id=$id'>Home</a></li>
                            <li><a href='news.php?id=$id'>News</a></li>
                            <li><a href='students.php?id=$id' class='active'>Notes</a></li>
                            <li><a href='exams.ph'?id=$id'>Exams</a></li>
                            <li><a href='contact2.php?id=$id'>Contact</a></li>
                            <li><a href='logout.php?id=$id' class='logout-btn'>Logout</a></li>
                        ";
                    ?>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <?php echo "<a href='dashboard/check_user.php?id=$id'><img src='$dp' class='dp'> <span class='account'>My Account</span></a>"?>

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

                <?php
                    for($i=$size-1; $i>=0; $i--){
                        echo 

                        "
                            <div class='col-lg-3 col-md-6' data-aos='zoom-in' data-aos-delay='100'>
                                <div class='pricing-tem'>
                                    <h3 style='color: #20c997;'>$poster[$i]</h3>
                                    <ul>
                                        <h2><b>Description</b></h2>
                                        <li>$description[$i]</li>
                                    </ul>
                                    <a href='$notes[$i]' class='btn-buy'>Read Now</a><br>
                                    <a href='$notes[$i]' class='btn-download' download='$description[$i]'>Download Now</a><br><br>
                        ";
                        
                        $query0 = "SELECT * FROM saved";
                        $result0 = mysqli_query($db, $query0);
                        $found = false;

                        if(mysqli_num_rows($result0)){
                            for($j=0; $j<mysqli_num_rows($result0); $j++){
                                $row = mysqli_fetch_array($result0);

                                if($id === $row['saver']){
                                    if($key[$i] === $row['saved_key'] && $row['category'] === "notes"){
                                        $found = true;
                                    }
                                }
                            }
                        }
                        if($found){
                            echo 
                            "
                                        <a class='saved' title='You have already saved these notes. Please review them in your account!'>Saved</a>
                                    </div>
                                </div>
                            ";
                        }
                        else{
                            echo 
                            "
                                        <a href='save.php?id=$id&&key=$key[$i]&&lev=$lev&&class=$class&&cat=$cat&&subject=$subject' class='save'>Save</a>
                                    </div>
                                </div>
                            ";
                        }                    
                    }
                ?>
                
                <!-- End Pricing Item -->

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