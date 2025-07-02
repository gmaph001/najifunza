<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];

    $query = "SELECT * FROM admin";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
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

    $initial = str_split($firstname);

    $init = $initial[0];

    $query2 = "SELECT * FROM classes";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($class === $row['class_key']){
                $classname = $row['class_name'];
                $classphoto = $row['class_photo'];
                $create_date = $row['create_date'];
                $creator = $row['creator'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NAJIFUNZA | Class Profile</title>
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
        <?php echo "<a href='check_user.php?id=$id' class='logo d-flex align-items-center'>";?>
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
                        <img src='../$dp' alt='Profile' class='photo-rounded'>
                        <span class='d-none d-md-block dropdown-toggle ps-2'>$init. $lastname</span>
                    ";

                ?>
                
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <?php
                        echo "<h6>$firstname $lastname</h6>";

                        if($codename === "TEA"){
                            echo "<span>Teacher</span>";
                        }
                        else if($codename === "ADM"){
                            echo "<span>Admin</span>";
                        }
                        else if($codename === "PRM"){
                            echo "<span>Premium User</span>";
                        }
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
            <?php echo "<a class='nav-link ' href='myclass.php?id=$id&&class=$class'>";?>
            <i class="bi bi-house-door"></i>
            <span>Home</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='class_notes.php?id=$id&&class=$class'>";?>
            <i class="bi bi-file-earmark-text"></i>
            <span>Class Notes</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='myclass.php?id=$id&&class=$class'>";?>
            <i class="bi bi-grid"></i>
            <span>Class Assignments</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='myclass.php?id=$id&&class=$class'>";?>
            <i class="bi bi-file-diff"></i>
            <span>Class Exams</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='class_announcements.php?id=$id&&class=$class'>";?>
            <i class="bi bi-megaphone"></i>
            <span>Class Announcements</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='myclass.php?id=$id&&class=$class'>";?>
            <i class="bi bi-save"></i>
            <span>Class Projects</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='class-members.php?id=$id&&class=$class'>";?>
            <i class="bi bi-person"></i>
            <span>Class Members</span>
            </a>
        </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Class Profile</h1>
        </div><!-- End Page Title -->

        <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <?php echo "<img src='../$classphoto' alt='Profile' class='picha'>";?>
                <?php
                        echo "<h2>$classname</h2>";
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

                    <li class="nav-item">         
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title">Profile Details</h5>
                    
                    <?php 
                        echo 
                        "
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 label '>Class Name</div>
                                <div class='col-lg-9 col-md-8'>$classname</div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-3 col-md-4 label'>Created By</div>
                                <div class='col-lg-9 col-md-8'>$username </div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-3 col-md-4 label'>Created On</div>
                                <div class='col-lg-9 col-md-8'>$create_date</div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-3 col-md-4 label'>Creator's Phone</div>
                                <div class='col-lg-9 col-md-8'>$phone</div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-3 col-md-4 label'>Creator's Email</div>
                                <div class='col-lg-9 col-md-8'>$email</div>
                            </div>
                        ";
                    ?>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    

                        <?php
                            echo 
                            "
                                <form method='POST' action='class_update.php?id=$id&&class=$class'>
                                    <div class='row mb-3'>
                                    <label for='profileImage' class='col-md-4 col-lg-3 col-form-label'>Profile Image</label>
                                    <div class='col-md-8 col-lg-9'>
                                        <img src='../$classphoto' alt='Profile'>
                                        <div class='pt-2'>
                                            <a href='upload_class_photo.php?id=$id&&class=$class' class='btn btn-primary btn-sm' title='Upload new profile image'><i class='bi bi-upload'></i></a>
                                            <a href='delete_class_photo.php?id=$id&&class=$class' class='btn btn-danger btn-sm' title='Remove my profile image'><i class='bi bi-trash'></i></a>
                                        </div>
                                    </div>
                                    </div>

                                    <div class='row mb-3'>
                                        <label for='fullName' class='col-md-4 col-lg-3 col-form-label'>Class Name</label>
                                        <div class='col-md-8 col-lg-9'>
                                            <input name='classname' type='text' class='form-control' id='fullName' value='$classname' required>
                                        </div>
                                    </div>

                                    <div class='text-center'>
                                        <button type='submit' class='btn btn-primary' name='profile'>Save Changes</button>
                                    </div>
                                </form><br>
                                <center><p class='card-text'><a href='class_authentication.php?id=$id&&class=$class' class='btn btn-primary delete'>Delete Class</a></p></center>
                            ";
                        ?>

                        <!-- End Profile Edit Form -->

                    </div>

                    <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                        <?php echo "<form method='POST' action='update_class_pass.php?id=$id&&class=$class'>";?>

                            <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="currentPassword" required>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword" required>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword" required>
                            </div>
                            </div>

                            <?php echo "<a href='reset_class_pass.php?id=$id&&class=$class'>Forget Password?</a>";?>

                            <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="updatePass" onclick="checkpass()">Change Password</button>
                            </div>
                        </form><!-- End Change Password Form -->
                    </div>

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
        <div class="credits">
            Designed by <a href="https://softdelete.org/">Soft Delete</a>
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