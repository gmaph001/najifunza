<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

    $posterID = [];
    $subject = [];
    $notes = [];
    $level = [];
    $class = [];
    $description = [];
    $key = [];
    $size = 0;

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

    $query2 = "SELECT * FROM notes";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($id === $row['poster_ID']){
                $subject[$size] = $row['subject'];
                $notes[$size] = $row['notes'];
                $level[$size] = $row['level'];
                $class[$size] = $row['class'];
                $description[$size] = $row['description'];
                $key[$size] = $row['notes_key'];
                $size++;
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NAJIFUNZA | My Notes</title>
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

        <div class="search-bar">
            <div class="search-form d-flex align-items-center">
                <input type="text" name="query" id="search" placeholder="Search" title="Enter search keyword">
                <button title="Search"><i class="bi bi-search"></i></button>
            </div>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

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

        <div class="pagetitle notestitle">
            <h1>Notes</h1>
            <?php echo "<a href='add-notes.php?id=$id' class='add2'>Upload Notes</a>";?>
        </div><!-- End Page Title -->

        <section class="section">
            
            <center>
                <div class="results" id="result">
                    <p></p>
                </div><br><br>
            </center>

            <?php

                if($size == 0){
                    echo 
                    "
                        <div class='unavailable'>
                            <p>Sorry! You have not posted any notes yet!</p>
                        </div>
                    ";
                }
                else{
                    echo "<div class='row align-items-horizontal notes'>";
                    for($i=$size-1; $i>=0; $i--){
                        $somo = strtolower($subject[$i]);
                        echo
                        "
                            

                                <!-- Card with an image on top -->
                                <div class='card'>
                                    <img src='../media/images/$somo.jpg' class='card-img-top card subject-photo' alt='...'>
                                    <div class='card-body'>
                                        <h3><b>$subject[$i]</b></h3>
                                        <h5 class='card-title'>Description</h5>
                                        <p class='card-text'>$description[$i]</p>
                                        <p class='card-text'><a href='../$notes[$i]' class='btn btn-primary'>Preview</a></p>
                                        <p class='card-text'><a href='delete_notes.php?id=$id&&key=$key[$i]' class='btn btn-primary delete'>Delete</a></p>
                                    </div>
                                </div>
                                <!-- End Card with an image on top -->

                            
                        ";
                    }
                    echo "</div>";
                }

            ?>
            
        
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
    <?php echo "<a href='add-notes.php?id=$id' class='add-notes'><span class='up-icon'>+</span><span class='up'>Upload</span></a>";?>

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

    <!-- Search script-->
    <script src="../jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){

            $("#search").keyup(function(){

                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    $.ajax({
                        <?php echo "url: 'search.php?id=$id'";?>,
                        method: "POST",
                        data: {input:input},

                        success:function(data){
                            $("#result").html(data);
                            $("#result").css("display","block");
                        }
                    });
                }
                else{
                    $("#result").css("display","none");
                }
            })
        })    
    </script>


</body>

</html>