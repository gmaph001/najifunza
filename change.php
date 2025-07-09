<?php
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NAJIFUNZA | Login/Sign Up</title>
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
    
          <a href="index.html" class="logo d-flex align-items-center">
            <h1 class="sitename"><span>N</span>ajifunza</h1>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="students.html">Notes</a></li>
              <li><a href="exams.html">Exams</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="login.html" class="active">Login</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
        </div>
    </header>

    <main class="main">

        <div class="login-form">

            <!-- Login Form -->
            <?php echo "<form class='login' action='change_pass.php?id=$id' method='POST' enctype='multipart/form-data'>";?>
                <center><h2>New Password</h2></center>
                <div class="inputs">
                    <label for="inputPassword4" class="form-label">New Password</label>
                    <div class="text-input">
                        <input type="password" name="password" class="form-control" id="password1" required>
                        <img src="media/icons/hidden.png" class="icon" id="show1">
                    </div>
                </div>
                <div class="inputs">
                    <label for="inputPassword4" class="form-label">Re-type New Password</label>
                    <div class="text-input">
                        <input type="password" name="pass" class="form-control" id="password2" required>
                        <img src="media/icons/hidden.png" class="icon" id="show2">
                    </div>
                </div>
                <div class="login-btns">
                    <button type="submit" name="login" class="btn submit" onclick="checkpass()">Change Password</button>
                </div>
            </form>
            <!-- Login Form -->

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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    
    <script>
        let show1 = document.getElementById("show1");
        let show2 = document.getElementById("show2");

        let a = 0;
        let b = 0;

        function even(n){
            if(n%2 == 0){
                return true;
            }
            else{
                return false;
            }
        }

        show1.addEventListener('click', function(){

            a++;

            if(!even(a)){
                show1.src = "media/icons/show.png";
                document.getElementById("password1").setAttribute("type", "text");
            }
            else{
                show1.src = "media/icons/hidden.png";
                document.getElementById("password1").setAttribute("type", "password");
            }
            
        })

        show2.addEventListener('click', function(){

            b++;

            if(!even(b)){
                show2.src = "media/icons/show.png";
                document.getElementById("password2").setAttribute("type", "text");
            }
            else{
                show2.src = "media/icons/hidden.png";
                document.getElementById("password2").setAttribute("type", "password");
            }
            
        })

        function checkpass(){
            if(document.getElementById("password1").value !== document.getElementById("password2").value){
                alert("Make sure that your passwords are same!");
                event.preventDefault();
            }
        }

    </script>
    
</body>
    
</html>