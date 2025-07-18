<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $no = 0;

    $posterID = [];
    $subject = [];
    $notes = [];
    $level = [];
    $class = [];
    $description = [];
    $description2 = [];
    $notes2 = [];
    $subject2 = [];
    $key = [];
    $size = 0;

    $saved = [];
    $saved_key = [];
    $category = [];
    $size2 = 0;

    $size3 = 0;

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

    $query3 = "SELECT * FROM saved";
    $result3 = mysqli_query($db, $query3);

    if($result3){
        for($i=0; $i<mysqli_num_rows($result3); $i++){
            $row = mysqli_fetch_array($result3);

            if($id === $row['saver']){
                $saved_key[$size] = $row['saved_key'];
                $category[$size] = $row['category'];

                $query2 = "SELECT * FROM notes";
                $result2 = mysqli_query($db, $query2);

                if($result2){
                    for($j=0; $j<mysqli_num_rows($result2); $j++){
                        $row2 = mysqli_fetch_array($result2);

                        if($saved_key[$size] === $row2['notes_key'] && $category[$size] === "notes"){
                            $subject[$size] = $row2['subject'];
                            $notes[$size] = $row2['notes'];
                            $level[$size] = $row2['level'];
                            $class[$size] = $row2['class'];
                            $description[$size] = $row2['description'];
                            $key[$size] = $row2['notes_key'];
                        }
                    }
                }
                $size++;
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

    <title>NAJIFUNZA | Saved</title>
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
                <?php echo "<a class='nav-link collapsed' href='check_user.php?id=$id'>";?>
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
                <?php echo "<a class='nav-link ' href='saved.php?id=$id'>";?>
                <i class="bi bi-save"></i>
                <span>Saved</span>
                </a>
            </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <section class="section">

            <center>
                <div class="results" id="result">
                    <p></p>
                </div>
            </center>

            <div class="pagetitle">
                <h1>Saved</h1>
            </div><!-- End Page Title -->

            <?php

                $exist1 = false;
                $exist2 = false;
                $exist3 = false;

                if($size == 0){
                    echo 
                    "
                        <div class='unavailable'>
                            <p>Sorry! You have not saved any materials yet!</p>
                        </div>
                    ";
                }
                else{

                    for($i=0; $i<$size; $i++){
                        if($category[$i] === "notes"){
                            $exist1 = true;
                            break;
                        }
                    }

                    if($exist1){
                        echo 
                        "
                            <div class='pagetitle'>
                                <h1>Notes</h1>
                            </div>
                            <div class='row align-items-horizontal notes'>
                        
                        ";
                        for($i=$size-1; $i>=0; $i--){
                            if($category[$i] === "notes"){
                                $somo = strtolower($subject[$i]);
                                echo
                                "
                                    

                                        <!-- Card with an image on top -->
                                        <div class='card'>
                                            <img src='../media/images/$somo.jpg' class='card-img-top card subject-photo' alt='...'>
                                            <div class='card-body'>
                                                <h3>$subject[$i]</h3>
                                                <h5 class='card-title'><b>Description</b></h5>
                                                <p class='card-text'>$description[$i]</p>
                                                <div class='top_btns'>
                                                    <a href='../$notes[$i]' target='_blank' class='btn btn-primary'>Preview</a>
                                                    <a href='delete_saved.php?id=$id&&key=$key[$i]' class='btn btn-primary remove'>Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card with an image on top -->

                                    
                                ";
                            }
                        }
                        echo "</div>";
                    }

                    for($i=0; $i<$size; $i++){
                        if($category[$i] === "exams"){
                            $exist2 = true;
                            break;
                        }
                    }

                    if($exist2){
                        echo 
                        "   
                            <div class='pagetitle'>
                                <h1>Exams</h1>
                            </div>
                            <div class='row align-items-horizontal notes'>
                        
                        ";
                        for($i=$size-1; $i>=0; $i--){
                            if($category[$i] === "exams"){
                                $somo = strtolower($subject[$i]);
                                echo
                                "
                                    

                                        <!-- Card with an image on top -->
                                        <div class='card'>
                                            <img src='../media/images/$somo.jpg' class='card-img-top card subject-photo' alt='...'>
                                            <div class='card-body'>
                                                <h5 class='card-title'><b>Description</b></h5>
                                                <p class='card-text'>$description[$i]</p>
                                                <div class='top_btns'>
                                                    <a href='../$notes[$i]' target='_blank' class='btn btn-primary'>Preview</a>
                                                    <a href='delete_saved.php?id=$id&&key=$key[$i]' class='btn btn-primary remove'>Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card with an image on top -->

                                    
                                ";
                            }
                        }
                        echo "</div>";
                    }
                    
                    for($i=0; $i<$size; $i++){
                        if($category[$i] === "videos"){
                            $exist3 = true;
                            break;
                        }
                    }

                    if($exist2){
                        echo 
                        "
                            <div class='pagetitle'>
                                <h1>Videos</h1>
                            </div>
                            <div class='row align-items-horizontal notes'>
                        
                        ";
                        for($i=$size-1; $i>=0; $i--){
                            if($category[$i] === "videos"){
                                $somo = strtolower($subject[$i]);
                                echo
                                "
                                    

                                        <!-- Card with an image on top -->
                                        <div class='card'>
                                            <img src='../media/images/$somo.jpg' class='card-img-top card subject-photo' alt='...'>
                                            <div class='card-body'>
                                                <h5 class='card-title'><b>Description</b></h5>
                                                <p class='card-text'>$description[$i]</p>
                                                <div class='top_btns'>
                                                    <a href='../$notes[$i]' target='_blank' class='btn btn-primary'>Preview</a>
                                                    <a href='delete_saved.php?id=$id&&key=$key[$i]' class='btn btn-primary remove'>Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card with an image on top -->

                                    
                                ";
                            }
                        }
                        echo "</div>";
                    }
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
                        <?php echo "url: 'search2.php?id=$id'";?>,
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