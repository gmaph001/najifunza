<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

    $classname = [];
    $classkey = [];
    $classinitial = [];
    $classphoto = [];
    $admin = [];
    $size = 0;

    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $username = $row['username'];
                $dp = $row['photo'];
            }
        }
    }


    $query2 = "SELECT * FROM classes";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

                $classname[$size] = $row['class_name'];
                $classkey[$size] = $row['class_key'];
                $classphoto[$size] = $row['class_photo'];

                $classinit = str_split($row['class_name']);
                $classinitial[$size] = $classinit[0];

                $userkey = $row['creator'];

                $query3 = "SELECT * FROM admin";
                $result3 = mysqli_query($db, $query3);

                if($result3){
                    for($j=0; $j<mysqli_num_rows($result3); $j++){
                        $row2 = mysqli_fetch_array($result3);

                        if($userkey === $row2['userkey']){
                            $admin[$size] = $row2['username'];
                        }
                    }
                }

                $size++;
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NAJIFUNZA | My Classes</title>
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
                <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
                <i class="bi bi-person-circle"></i>
                <span>My Account</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <?php echo "<a class='nav-link ' href='class2.php?id=$id'>";?>
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

        <section class="section">
            
            <center>
                <div class="results2" id="result2">
                    
                </div><br><br>
            </center>

            <?php
                if($size == 0){
                    echo 
                        "
                            <div class='unavailable'>
                                <p>Sorry! There are no any class yet!</p>
                            </div>
                        ";
                }
                else{
                    echo 
                        "
                            <div class='row align-items-horizontal notes' id='notes-sect'>
                        ";
                    for($j=$size-1; $j>=0; $j--){
                        $success = false;
                        echo 
                        "
                                <div class='class'>
                                    <div class='class-photo' style='background-image: url(../$classphoto[$j]);'>
                                        <div class='class-initials'>$classinitial[$j]</div>
                                    </div>
                                    <div class='class-name'>
                                        <h2>$classname[$j]</h2>
                                        <span>Creator: <b>$admin[$j]</b></span>
                                    </div>
                        ";

                        $query = "SELECT * FROM my_classes";
                        $result = mysqli_query($db, $query);

                        if(mysqli_num_rows($result)>0){
                            for($k=0; $k<mysqli_num_rows($result); $k++){
                                $row = mysqli_fetch_array($result);

                                if($classkey[$j] === $row['class_key']){
                                    if($id === $row['userkey']){
                                        $success = true;
                                    }
                                }
                            }
                        }

                        if($success){
                            echo 
                            "
                                <div class='class-btns2'>
                                    <a href='class3.php?id=$id&&class=$classkey[$j]' class='enter2'>Enter</a>
                                    <a href='leave_class.php?id=$id&&class=$classkey[$j]&&key=$id' class='delete leave'>Leave</a>
                                </div>
                            ";
                        }
                        else{
                            echo 
                            "
                                <div class='class-btns'>
                                    <a href='join_class.php?id=$id&&class=$classkey[$j]' class='join'>Join</a>
                                </div>
                            ";
                        }

                        echo
                        "
                            </div>
                        ";
                    }
                    
                    echo 
                    "
                        </div>   
                    ";
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
                        <?php echo "url: 'searchclass.php?id=$id'";?>,
                        method: "POST",
                        data: {input:input},

                        success:function(data){
                            $("#result2").html(data);
                            $("#result2").css("display","block");
                            $("#notes-sect").css("display","none");
                        }
                    });
                }
                else{
                    $("#result2").css("display","none");
                    $("#notes-sect").css("display","grid");
                }
            })
        })    
    </script>

    <script>
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
    
    </script>


</body>

</html>