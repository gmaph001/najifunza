<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $no = 0;

    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                
                $username = $row['username'];
                $email = $row['email'];
                $dp = $row['photo'];
            }
        }
    }

    $query4 = "SELECT * FROM my_classes";
    $result4 = mysqli_query($db, $query4);

    if($result4){
        for($i=0; $i<mysqli_num_rows($result4); $i++){
            $row = mysqli_fetch_array($result4);

            if($id === $row['userkey']){
                $no += intval($row['notify']);
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

            <?php
                if($no>0){
                    echo 
                        "
                            <li class='nav-item dropdown'>

                                <a class='nav-link nav-icon' href='#' data-bs-toggle='dropdown'>
                                    <i class='bi bi-bell'></i>
                                    <span class='badge bg-primary badge-number'>$no</span>
                                </a><!-- End Notification Icon -->

                                <ul class='dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications'>
                                    <li class='dropdown-header'>
                                        You have $no new notifications
                                        <a href='notification.php?id=$id&&pg=class2'><span class='badge rounded-pill bg-primary p-2 ms-2'>Mark all as read</span></a>
                                    </li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                        ";
                    $query5 = "SELECT * FROM my_classes";
                    $result5 = mysqli_query($db, $query5);

                    if($result5){
                        for($j=0; $j<mysqli_num_rows($result5); $j++){
                            $row = mysqli_fetch_array($result5);

                            if($id === $row['userkey']){
                                $key = $row['class_key'];
                                $no2 = $row['notify'];

                                $query6 = "SELECT * FROM classes";
                                $result6 = mysqli_query($db, $query6);

                                if($result6){
                                    for($i=0; $i<mysqli_num_rows($result6); $i++){
                                        $row2 = mysqli_fetch_array($result6);

                                        if($key === $row2['class_key'] && $no2>0){
                                            $jina = $row2['class_name'];

                                            echo 
                                                "   
                                                    <li class='notification-item'>
                                                        <a href='class3.php?id=$id&&class=$key'><i class='bi bi-check-circle text-success'></i></a>
                                                        <a href='class3.php?id=$id&&class=$key'>   
                                                            <div>
                                                                <h4 style='color:black;'>Class Notification</h4>
                                                                <p>$no2 new notification(s) from $jina</p>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <hr class='dropdown-divider'>
                                                    </li>
                                                ";
                                        }
                                    }
                                }
                            }
                        }
                    }

                    
                    echo
                        "
                                </ul><!-- End Notification Dropdown Items -->

                            </li><!-- End Notification Nav -->
                        ";
                }
            ?>

            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                <?php

                    echo 
                    "
                        <img src='../$dp' alt='Profile' class='photo-rounded'>
                        <span class='d-none d-md-block dropdown-toggle ps-2'>$username</span>
                    ";

                ?>
                
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <?php
                        echo "<h6>$username</h6>";
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
                <?php echo "<a class='nav-link ' href='check_user.php?id=$id'>";?>
                <i class="bi bi-person-circle"></i>
                <span>My Account</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <?php echo "<a class='nav-link collapsed' href='class2.php?id=$id'>";?>
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
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Edit Photo</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="ttab-pane fade show active profile-overview" id="profile-overview">

                            <!-- Profile Edit Form -->
                            <?php echo "<form action='photo_update.php?id=$id' method='POST' enctype='multipart/form-data'>";?>
                                <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <?php echo "<img src='../$dp' alt='Profile' class='picha'><br><br>";?>
                                    <input type="file" class="form-control" id="profileImage" name="photo" required onchange="checksize()" accept=".jpg,.png,.jpeg">
                                    <p class="alert" id="photoresponse"></p>
                                </div>
                                </div>

                                <div class="text-center">
                                <button type="submit" name="update" onclick="subgo()" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->

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
    <script>

        function checksize(){
            let photo = document.getElementById("profileImage")
            let ukubwa = Math.round(photo.files[0].size/1024/1024);

            if(ukubwa>1){
                document.getElementById("photoresponse").innerHTML = "*Your photo should be less than 1 MB!*";
                return false;
            }
            else{
                let name = photo.value;

                let type = "";

                for(let i=name.length-4; i<name.length; i++){
                    type += name[i];
                }

                if(type === ".jpg" || type === ".png" || type === "jpeg"){
                    document.getElementById("photoresponse").innerHTML = "";
                    return true;
                }
                else{
                    document.getElementById("photoresponse").innerHTML = `*${type} format not allowed (Only png/jpeg/jpg allowed)!*`;
                    return false;
                }
            }
        }

        function subgo(){
            if(!checksize()){
                event.preventDefault();
            }
            else{
                document.getElementById("photoresponse").innerHTML = "";
                return true;
            }
        }

    </script>

</body>

</html>