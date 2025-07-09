<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NAJIFUNZA | Verification</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../media/images/najifunza-logo.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- Personal CSS Files-->
     <link href="../assets/css/message.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="../index.html" class="logo d-flex align-items-center">
            <h1 class="sitename"><span>N</span>ajifunza</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </header>

    <main class="main">

        <div class="message">
            <p>
                <?php

                    require "../connect.php";
                    require "address.php";
                    require "timer.php";

                    $id = $_GET['id'];
                    $class = $_GET['class'];

                    $success = false;
                    $success2 = false;
                    $success3 = false;

                    if(isset($_POST['login'])){
                        $password = $_POST['password'];

                        $query = "SELECT * FROM classes";
                        $result = mysqli_query($db, $query);

                        $query2 = "SELECT * FROM admin";
                        $result2 = mysqli_query($db, $query2);

                        if($result){
                            for($i=0; $i<mysqli_num_rows($result); $i++){
                                $row = mysqli_fetch_array($result);

                                if($class === $row['class_key']){
                                    $photo = $row['class_photo'];

                                    if($photo === "media/classes/images/".$class.".jpg"){
                                        $success2 = true;
                                    }
                                }
                            }
                        }

                        if($result2){
                            for($i=0; $i<mysqli_num_rows($result2); $i++){
                                $row = mysqli_fetch_array($result2);

                                $hashed = $row['password'];

                                if($id === $row['userkey']){
                                    if(password_verify($password, $hashed)){
                                        $success = true;
                                    }
                                }
                            }
                        }

                        if($success){
                            $query3 = "DELETE FROM classes WHERE class_key = '$class'";
                            $result3 = mysqli_query($db, $query3);

                            if($result3){

                                if($success2){
                                    $delete = unlink("../media/classes/images/".$class.".jpg");

                                    if($delete){
                                        $success3 = true;

                                        $query4 = "SELECT * FROM class_activity";
                                        $result4 = mysqli_query($db, $query4);

                                        if($result4){
                                            for($i=0; $i<mysqli_num_rows($result4); $i++){
                                                $row = mysqli_fetch_array($result4);

                                                if($class === $row['class_key']){
                                                    $material = $row['mat_name'];
                                                    $key = $row['mat_key'];

                                                    $query5 = "DELETE FROM class_activity WHERE mat_key = '$key'";
                                                    $result5 = mysqli_query($db, $query5);

                                                    if($result5){
                                                        if(file_exists("../".$material)){
                                                            $futa = unlink("../".$material);

                                                            if($futa){
                                                                echo "Success";
                                                            }
                                                            else{
                                                                echo "Failure!";
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    else{
                                        echo "Error while deleting your account! <br> Please, contact admin!";
                                    }
                                }
                                else{
                                    $success3 = true;
                                }
                                
                            }
                            else{
                                echo "Error while deleting your account! <br> Please, contact admin!";
                            }
                        }
                        else{
                            echo "Incorrect password! Please, <br> <a href='class_authentication.php?id=$id&&class=$class'><b><i>Try Again</i></b></a>";
                        }

                        if($success3){
                            header("location:class.php?id=$id");
                        }
                        
                    }
                ?>
            </p>
        </div>

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
        </div>
    
    </footer>
    
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Preloader -->
    <div id="preloader"></div>
    
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
    
</body>
    
</html>