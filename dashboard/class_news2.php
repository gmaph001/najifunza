<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];
    $key = $_GET['key'];

    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $username = $row['username'];
            }
        }
    }

    $user = str_split($username);

    $query2 = "SELECT * FROM class_news";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($class === $row['class'] && $row['news_type'] === "class" && $key === $row['news_key']){
                $headline = $row['headline'];
                $news = $row['news'];
                $date = $row['news_date'];
                $time = $row['news_time'];
            }
        }
    }

    $query3 = "SELECT * FROM classes";
    $result3 = mysqli_query($db, $query3);

    if($result3){
        for($i=0; $i<mysqli_num_rows($result3); $i++){
            $row = mysqli_fetch_array($result3);

            if($class === $row['class_key']){
                $classname = $row['class_name'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAJIFUNZA | My Class</title>
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/news.css">
    <link rel="icon" type="image/X-icon" href="../media/images/najifunza-logo.png">
</head>
<body>
    <div class="navigation">
        <div class="left">
            <?php echo "<a href='check_user.php?id=$id'><img src='../media/images/najifunza-logo.png' class='logo'></a>";?>
            <h1>
                <?php echo "<a href='check_user.php?id=$id'><span class='n'>N</span><span class='rest'>ajifunza</span></a>";?>
            </h1>
        </div>
        <div class="center">
            <?php echo "<h1>$classname</h1>";?>
        </div>
        <a class="settings" href="#" onmouseover="setword()" onmouseleave="remword()">
            <img src="../media/icons/settings.png" class="icon setting" id="sett">
            <p class="setword" id="setwrd">Setting</p>
        </a>
        <img src="../media/icons/menu.png" class="icon menu" onclick="menushow()">
    </div>
    <div class="main">
        <div class="sidebar">

            <?php
                echo 
                "
                    <a class='option' href='class3.php?id=$id&&class=$class' onmouseover='optshow(1)' onmouseleave='opthide(1)'>
                        <img src='../media/icons/home.png' class='icon'>
                        <p class='optword' id='optwrd1'>Home</p>
                    </a>
                    <a class='option' href='class_notes2.php?id=$id&&class=$class' onmouseover='optshow(6)' onmouseleave='opthide(6)'>
                        <img src='../media/icons/notes.png' class='icon'>
                        <p class='optword' id='optwrd6'>Notes</p>
                    </a>
                    <a class='option' href='class_news.php?id=$id&&class=$class' onmouseover='optshow(2)' onmouseleave='opthide(2)'>
                        <img src='../media/icons/news2.png' class='icon'>
                        <p class='optword' id='optwrd2'>News</p>
                    </a>
                    <a class='option' href='#' onmouseover='optshow(3)' onmouseleave='opthide(3)'>
                        <img src='../media/icons/exam.png' class='icon'>
                        <p class='optword' id='optwrd3'>Exams</p>
                    </a>
                    <a class='option' href='#' onmouseover='optshow(4)' onmouseleave='opthide(4)'>
                        <img src='../media/icons/project.png' class='icon'>
                        <p class='optword' id='optwrd4'>Projects</p>
                    </a>
                    <a class='option' href='#' onmouseover='optshow(5)' onmouseleave='opthide(5)'>
                        <img src='../media/icons/assignment.png' class='icon'>
                        <p class='optword' id='optwrd5'>Assign</p>
                    </a>
                ";
            ?>

        </div>
        <div class="body">
            <div class="horizontal" id="dropdown">
                <div class="menubar">

                    <?php
                        echo 
                        "
                            <a href='class3.php?id=$id&&class=$class' class='nav-option'>Home</a><hr>
                            <a href='class_notes2.php?id=$id&&class=$class' class='nav-option'>Notes</a><hr>
                            <a href='class_news.php?id=$id&&class=$class' class='nav-option'>News</a><hr>
                            <a href='#' class='nav-option'>Exams</a><hr>
                            <a href='#' class='nav-option'>Projects</a><hr>
                            <a href='#' class='nav-option'>Assignments</a><hr>
                        ";
                    ?>
                    
                </div>
            </div>
            <div class="news-cover">
                <div class="news">
                    <img src="../media/icons/tangazo.webp" class="news-icon">
                    <div class="announcement">
                        <h1 class="headline">
                            <?php echo "$headline";?>
                        </h1>
                        <p class="main-news">
                            <?php echo "$news";?>
                        </p>
                        <p class="post-date">
                            <?php
                                echo 
                                "
                                    Posted on: $date<br>
                                    Posted at: $time
                                ";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

    let a = 0;

    function even(n){
        if(n%2 == 0){
            return true;
        }
        else{
            return false;
        }
    }

    function setword(){
        document.getElementById("setwrd").setAttribute("class", "remword");
        document.getElementById("sett").style.transform = "translate(0vw)";
    }

    function remword(){
        document.getElementById("setwrd").setAttribute("class", "setword");
        document.getElementById("sett").style.transform = "translate(5vw)";
    }

    function optshow(n){
        document.getElementById("optwrd"+n).setAttribute("class", "optshw");
    }

    function opthide(n){
        document.getElementById("optwrd"+n).setAttribute("class", "optword");
    }

    function menushow(){
        let menubtn = document.querySelector('.menu');

        a++;
        
        if(even(a)){
            menubtn.src = "../media/icons/menu.png";
            document.getElementById("dropdown").setAttribute("class", "horizontal-non");
        }
        else{
            menubtn.src = "../media/icons/remove.png";
            document.getElementById("dropdown").setAttribute("class", "horizontal-active");
        }
    }

</script>
</html>