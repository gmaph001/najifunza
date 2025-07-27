<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];

    $headline = [];
    $news = [];
    $key = [];
    $time = [];
    $date = [];
    $views = [];
    $size = 0;
    $no = 1;
    $no_views = 0;

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

    $query2 = "SELECT * FROM class_news";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($id === $row['poster'] && $class === $row['class'] && $row['news_type'] === "class"){
                $no_views = 0;
                $news_id[$size] = $row['news_ID'];
                $headline[$size] = $row['headline'];
                $news[$size] = $row['news'];
                $key[$size] = $row['news_key'];
                $time[$size] = $row['news_time'];
                $date[$size] = $row['news_date'];

                $query3 = "SELECT * FROM classnews_views";
                $result3 = mysqli_query($db, $query3);

                if($result3){
                    for($j=0; $j<mysqli_num_rows($result3); $j++){
                        $row2 = mysqli_fetch_array($result3);

                        if($key[$size] === $row2['news_key'] && $class === $row2['class_key']){
                            $no_views++;
                        }
                    }
                }

                $views[$size] = $no_views;
                
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

  <title>NAJIFUNZA | Class Notes</title>
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
            <?php echo "<a class='nav-link collapsed' href='myclass.php?id=$id&&class=$class'>";?>
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
            <?php echo "<a class='nav-link collapsed' href='class_assignments.php?id=$id&&class=$class'>";?>
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
            <?php echo "<a class='nav-link ' href='class_announcements.php?id=$id&&class=$class'>";?>
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

        <div class="pagetitle notestitle">
            <h1>Announcements</h1>
            <?php echo "<a href='add-class-news.php?id=$id&&class=$class' class='add2'>New announcements</a>";?>
        </div><!-- End Page Title -->
        
        <?php
            if($size == 0){
                echo 
                    "
                        <div class='unavailable'>
                            <p>Sorry! You have not posted any announcement yet!</p>
                        </div>
                    ";
            }
            else{

                echo 
                    "
                        <div class='row align-items-horizontal matangazo'>

                    ";


                for($i=$size-1; $i>=0; $i--){
                
                    echo 
                        "
                            <div class='viewers' id='view$news_id[$i]'>
                                <div class='viewers-main'>
                                    <h4><b>Viewers</b></h4>
                                    <iframe src='class-viewers.php?id=$id&&class=$class&&key=$key[$i]' class='viewers-accounts'></iframe>
                                    <a class='view' onclick="; echo "hideviews('view$news_id[$i]')"; echo ">Hide</a>
                                </div>
                            </div>    
                        
                            <div class='announcement'>
                                <div class='announce-top'>
                                    <span class='number'><b>$no.</b></span>
                                    <span class='date'><b>Posted on:</b> $date[$i]</span>
                                    <div class='announce-btns'>
                                        <a class='view' onclick="; echo "bottomview('btm$news_id[$i]') "; echo "id='onbtm$news_id[$i]' name='0'>View</a>
                                        <a href='class_announcement_edit.php?id=$id&&class=$class&&key=$key[$i]' class='edit'>Edit</a>
                                        <a href='class_announcement_delete.php?id=$id&&class=$class&&key=$key[$i]' class='delete'>Delete</a>
                                    </div>

                                </div>
                                <div class='announce-bottom' id='btm$news_id[$i]'>
                                    <h5 class='announce-headline'>$headline[$i]</h5>
                                    <p class='announce-main'>
                                        $news[$i]
                                    </p>
                                    <div class='announce-view'>
                                        <span class='viewed'>Viewed by: </span>
                                        <a class='views' onclick="; echo "showviews('view$news_id[$i]')"; echo ">$views[$i] viewer(s)</a>
                                    </div>
                                </div>
                            </div>

                        
                        ";
                        $no++;
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
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php echo "<a href='add-class-news.php?id=$id&&class=$class' class='add-notes'><span class='up-icon'>+</span><span class='up'>Upload</span></a>";?>

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

        function even(a){
            if(a%2 == 0){
                return true;
            }
            else{
                return false;
            }
        }

        function showup(a){
            let id = a;
            let popup = document.getElementById(id);

            popup.style.display = "block";
        }

        function showdown(a){
            let id = a;
            let popup = document.getElementById(id);

            popup.style.display = "none";
        }

        function bottomview(a){
            let id = a;
            console.log(id);
            let view = document.getElementById(id);
            let viewbtn = document.getElementById("on"+id);
            let num = viewbtn.getAttribute("name");

            num++;

            if(even(num)){
                view.style.display = "none";
                viewbtn.setAttribute("name", num);
                viewbtn.innerHTML = "View";
            }
            else{
                view.style.display = "flex";
                viewbtn.setAttribute("name", num);
                viewbtn.innerHTML = "Hide";
            }

        }

        function showviews(a){
            let id = a;
            let popup = document.getElementById(id);

            popup.style.display = "block";
        }

        function hideviews(a){
            let id = a;
            let popup = document.getElementById(id);

            popup.style.display = "none";
        }
    
    </script>


</body>

</html>