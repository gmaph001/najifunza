<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

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
            <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>Home</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link ' href='notes.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>My Notes</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='../students.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>Other Notes</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>My Exams</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>My Announcements</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>My Classes</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <?php echo "<a class='nav-link collapsed' href='saved2.php?id=$id'>";?>
            <i class="bi bi-person"></i>
            <span>Saved</span>
            </a>
        </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Notes</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notes Panel</h5>

                            <!-- Floating Labels Form -->
                            <?php echo "<form class='row g-3' method='POST' action='upload_notes.php?id=$id' enctype='multipart/form-data'>";?>
                            <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fname" name="full" placeholder="Your Name" required>
                                        <label for="floatingName">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="desribe" name="descript" style="height: 100px;" required></textarea>
                                        <label for="floatingTextarea">Description (Please type the chapter or topic of the notes you want to share)</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="level" aria-label="State" name="lev" onclick="levelize()">
                                            <option selected value="none">Choose Level</option>
                                            <option value="1">Primary Level</option>
                                            <option value="2">Secondary Level</option>
                                            <option value="3">College Level</option>
                                        </select>
                                        <label for="floatingSelect">Level</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 category">
                                        <select class="form-select" id="category" aria-label="State" name="cat" onclick="levelize()">
                                            <option selected value="none">Choose category</option>
                                            <option value="secular">General</option>
                                            <option value="vocational">Vocational</option>
                                        </select>
                                        <label for="floatingSelect">Level</label>
                                    </div>
                                </div>
                                <div class="col-md-12 msingi">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="primary" aria-label="State" name="pri" onclick="masomo('primary')">
                                            <option selected value="none">Primary Level</option>
                                            <option value="1">Class 1</option>
                                            <option value="2">Class 2</option>
                                            <option value="3">Class 3</option>
                                            <option value="4">Class 4</option>
                                            <option value="5">Class 5</option>
                                            <option value="6">Class 6</option>
                                        </select>
                                        <label for="floatingSelect">Class</label>
                                    </div>
                                </div>
                                <div class="col-md-12 upili">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="secondary" aria-label="State" name="sec" onclick="masomo('secondary')">
                                            <option selected value="none">Secondary Level</option>
                                            <option value="1">Form 1</option>
                                            <option value="2">Form 2</option>
                                            <option value="3">Form 3</option>
                                            <option value="4">Form 4</option>
                                            <option value="5">Form 5</option>
                                            <option value="6">Form 6</option>
                                        </select>
                                        <label for="floatingSelect">Class</label>
                                    </div>
                                </div>
                                <div class="col-md-12 p-level">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="Psubject" aria-label="State" name="pSubj">
                                            <option selected value="none">Choose Subject</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="English">English</option>
                                            <option value="Civic and Moral">Civic And Moral</option>
                                            <option value="Science">Science and Technology</option>
                                        </select>
                                        <label for="floatingSelect">Subject</label>
                                    </div>
                                </div>
                                <a class="btn btn-primary masomo" onclick="checksomo()">Select Subject</a>
                                <div class="col-md-12 o-level">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="Osubject" aria-label="State" name="oSubj">
                                            <option selected value="none">Choose Subject</option>
                                            <option value="Basic Mathematics">Basic Mathematics</option>
                                            <option value="English">English</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Additional Maths">Additional Mathematics</option>
                                            <option value="Geography">Geography</option>
                                            <option value="History">History</option>
                                            <option value="Kiswahili">Kiswahili</option>
                                            <option value="Civics">Civics</option>
                                            <option value="Computer Science">Computer Studies</option>
                                            <option value="Book Keeping">Book Keeping</option>
                                            <option value="Commerce">Commerce</option>
                                        </select>
                                        <label for="floatingSelect">Subject</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 a-level">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="Asubject" aria-label="State" name="aSubj">
                                            <option selected value="none">Choose Subject</option>
                                            <option value="Basic Applied Maths">Basic Applied Mathematics</option>
                                            <option value="English">English</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Advanced Maths">Advanced Mathematics</option>
                                            <option value="Geography">Geography</option>
                                            <option value="History">History</option>
                                            <option value="Kiswahili">Kiswahili</option>
                                            <option value="General Studies">General Studies</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Business Studies">Business Studies</option>
                                        </select>
                                        <label for="floatingSelect">Subject</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="notes" id="floatingName" required>
                                        <label for="floatingName">Your File (In pdf)</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit" onclick="kagua()">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                            <!-- End floating Labels Form -->

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
    <script src="assets/js/add.js"></script>

</body>

</html>