<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $key = $_GET['key'];

    $query = "SELECT * FROM admin";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($key === $row['userkey']){
                $firstname = $row['firstname'];
                $secondname = $row['secondname'];
                $lastname = $row['lastname'];
                $username = $row['username'];
                $email = $row['email'];
                $phone = $row['phone'];
                $school = $row['school'];
                $codename = $row['codename'];
                $dp = $row['photo'];
            }
        }
    }

    $query2 = "SELECT * FROM users";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($id === $row['userkey']){
                
                $username2 = $row['username'];
                $email2 = $row['email'];
                $dp2 = $row['photo'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NAJIFUNZA | User Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../media/images/najifunza-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <?php echo "<a href='../home.php?id=$id' class='logo d-flex align-items-center'>";?>
            <img src="../media/images/najifunza-logo.png" alt="">
            <span class="d-none d-lg-block">Najifunza</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                <?php

                    echo 
                    "
                        <img src='../$dp2' alt='Profile' class='photo-rounded'>
                        <span class='d-none d-md-block dropdown-toggle ps-2'>$username2</span>
                    ";

                ?>
                
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <?php
                        echo "<h6>$username2</h6>";
                        echo "<span>Student</span>";
                    ?>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <?php echo "<a class='dropdown-item d-flex align-items-center' href='check_user.php?id=$id'>";?>
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <?php echo "<a class='dropdown-item d-flex align-items-center' href='../logout.php?id=$id'>";?>
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">    

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <?php echo "<a class='nav-link collapsed' href='../home.php?id=$id'>";?>
                <i class="bi bi-house-door"></i>
                <span>Home</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
                <i class="bi bi-person-circle"></i>
                <span>My Account</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <?php echo "<a class='nav-link' href='class2.php?id=$id'>";?>
                <i class="bi bi-person"></i>
                <span>Classes</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <?php echo "<a class='nav-link collapsed' href='saved.php?id=$id'>";?>
                <i class="bi bi-save"></i>
                <span>Saved</span>
                </a>
            </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Profile</h1>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
              <div class="col-xl-4">

                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <?php echo "<img src='../$dp' alt='Profile' class='picha'><br>";?>
                    <?php
                            echo "<h6><b>$username</b></h6>";
                    ?>
          
                  </div>
                
              </div>

            </div>

            <div class="col-xl-8">


            <div class="card">
                <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                        <h5 class="card-title">Profile Details</h5>
                        
                        <?php 
                            echo 
                            "
                                <div class='row'>
                                    <div class='col-lg-3 col-md-4 label '>Full Name</div>
                                    <div class='col-lg-9 col-md-8'>$firstname $secondname $lastname</div>
                                </div>

                                <div class='row'>
                                    <div class='col-lg-3 col-md-4 label'>School</div>
                                    <div class='col-lg-9 col-md-8'>$school</div>
                                </div>

                                <div class='row'>
                                    <div class='col-lg-3 col-md-4 label'>Username</div>
                                    <div class='col-lg-9 col-md-8'>$username</div>
                                </div>

                                <div class='row'>
                                    <div class='col-lg-3 col-md-4 label'>Phone</div>
                                    <div class='col-lg-9 col-md-8'>$phone</div>
                                </div>

                                <div class='row'>
                                    <div class='col-lg-3 col-md-4 label'>Email</div>
                                    <div class='col-lg-9 col-md-8'>$email</div>
                                </div>
                            ";
                        ?>

                    </div>

                </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Najifunza</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>

</body>

</html>