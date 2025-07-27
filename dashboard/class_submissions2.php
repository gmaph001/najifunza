<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];
    $key = $_GET['key'];
    $sub = $_GET['sub'];

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

    $query2 = "SELECT * FROM classes";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($class === $row['class_key']){
                $classname = $row['class_name'];
                $classphoto = $row['class_photo'];
            }
        }
    }

    $sub_name = [];
    $submission = [];
    $sub_key = [];
    $sub_date = [];
    $sub_time = [];
    $subcomm_key = [];
    $size = 0;

    $commenter = [];
    $comment = [];
    $comm_dp = [];
    $comm_user = [];
    $size2 = 0;

    $done = "";
    $past = "";
    $pastdate = "";
    $pastmonth = "";
    $pastyear = "";

    $query3 = "SELECT * FROM class_submissions";
    $result3 = mysqli_query($db, $query3);

    if($result3){
        for($i=0;$i<mysqli_num_rows($result3); $i++){
            $row = mysqli_fetch_array($result3);

            if($class === $row['class'] && $id === $row['submitter'] && $key === $row['assign_key']){
                $sub_name[$size] = $row['sub_name'];
                $submission[$size] = $row['submission'];
                $sub_key[$size] = $row['sub_key'];

                $query5 = "SELECT * FROM class_comments";
                $result5 = mysqli_query($db, $query5);

                if($result5){
                    for($j=0; $j<mysqli_num_rows($result5); $j++){
                        $row2 = mysqli_fetch_array($result5);

                        if($sub_key[$size] === $row2['sub_key']){
                            $commenter[$size2] = $row2['commenter'];

                            $query6 = "SELECT * FROM admin";
                            $result6 = mysqli_query($db, $query6);

                            if($result6){
                                for($k=0; $k<mysqli_num_rows($result6); $k++){
                                    $row3 = mysqli_fetch_array($result6);

                                    if($commenter[$size2] === $row3['userkey']){
                                        $comm_dp[$size2] = $row3['photo'];
                                        $comm_user[$size2] = $row3['username'];
                                    }
                                }
                            }

                            $comment[$size2] = $row2['comment'];
                            $subcomm_key[$size2] = $row2['sub_key'];
                            $comm_date[$size2] = $row2['sub_date'];
                            $comm_time[$size2] = $row2['sub_time'];
                            $size2++;
                        }
                    }
                }

                $sub_date[$size] = $row['sub_date'];
                $sub_time[$size] = $row['sub_time'];
                $size++;
            }
        }
    }

    $query4 = "SELECT * FROM class_assignment";
    $result4 = mysqli_query($db, $query4);

    if($result4){
        for($i=0; $i<mysqli_num_rows($result4); $i++){
            $row = mysqli_fetch_array($result4);

            if($key === $row['assign_key']){
                $format = $row['format'];
                $due = $row['due_date'];
            }
        }
    }

    $todate = date('Y').date('m').date('d');

    $today = intval($todate);

    $theday = str_split($due);
    $arrsize = sizeof($theday);

    for($i=0; $i<$arrsize; $i++){
        if($theday[$i] === "-"){
            continue;
        }
        else{
            $past .= $theday[$i];
        }
    }

    $chk = intval($past);

    $rem = $today - $past;

    if($rem>0){
        $done = "due";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAJIFUNZA | Class Submissions</title>
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/subBox.css">
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
                        <img src='../media/icons/news.png' class='icon'>
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
                    <a class='option' href='class_assignments2.php?id=$id&&class=$class' onmouseover='optshow(5)' onmouseleave='opthide(5)'>
                        <img src='../media/icons/assignment2.png' class='icon'>
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
                            <a href='class_assignments2.php?id=$id&&class=$class' class='nav-option'>Assignments</a><hr>
                        ";
                    ?>
                    
                </div>
            </div>
            

                <?php
                    if($size == 0){
                        echo
                        "
                            <div class='unavailable'>
                                <p>You have not yet submitted anything!</p>
                            </div>
                        ";
                    }
                    else{
                        for($i=0; $i<$size; $i++){
                            if($sub_key[$i] === $sub){
                                $n = $i;
                            }
                        }
                        echo 
                        "   
                            <div class='submissions'>
                            <div class='mainSub'>
                        ";
                        if($format === "document" || $format === "photo"){
                            echo 
                            "
                                <div class='doc'>
                                    <img src='../media/icons/$format.png' class='docPic'>
                                    <a href='$submission[$n]' class='preview'>Preview</a>
                                    <a href='$submission[$n]' class='download' download='$sub_name[$n]'>Download</a>
                                </div>
                            ";
                        }
                        else if($format === "code" || $format === "presentation" || $format === "spreadsheet"){
                            echo 
                            "
                                <div class='doc'>
                                    <img src='../media/icons/$format.png' class='docPic'>
                                    <a href='$submission[$n]' class='download' download='$sub_name[$n]'>Download</a>
                                </div>
                            ";
                        }
                        else if($format === "video"){
                            echo 
                            "
                                <video class='video' controls autoplay>
                                    <source src='$submission[$n]'>
                                </video>
                            ";
                        }
                        echo
                        "
                                <div class='comments'>
                                    <h2 onclick='showcomm()'>Comments</h2>
                                    <div class='groupComm' id='comm'>
                        ";

                        for($i=$size2-1; $i>=0; $i--){
                            if($sub_key[$n] === $subcomm_key[$i]){
                                echo 
                                "
                                        <div class='comment'>
                                            <div class='topPart'>
                                                <img src='../$comm_dp[$i]' class='dp'>
                                                <span class='username'>$comm_user[$i]</span>
                                            </div>
                                            <div class='cPart'>
                                                <p>
                                                    $comment[$i]
                                                </p>
                                            </div>
                                            <div class='lowerPart'>
                                                <p>
                                                    Posted on: $comm_date[$i]
                                                </p>
                                                <p>
                                                    Posted at: $comm_time[$i]
                                                </p>
                                            </div>
                                        </div>
                                ";
                            }
                        }

                        echo 
                        "       </div>
                                </div>
                            </div>
                        ";

                        $o = $size-1;

                        echo 
                        "
                            <div class='otherSub'> 
                        ";

                        for($i=$o; $i>=0; $i--){
                            if($sub_key[$i] !== $sub){
                                echo 
                                "
                                    <a href='class_submissions2.php?id=$id&&class=$class&&key=$key&&sub=$sub_key[$i]' class='other'>
                                        <img src='../media/icons/$format.png' class='otherPic'>
                                        <p class='exp'>Submission No: $sub_key[$i]</p>
                                    </a>
                                ";
                            }
                        }

                        echo 
                        "
                            </div>
                        ";

                    }
                ?>
                
            </div>
        </div>
    </div>

    <?php
        if($done !== "due"){
            echo 
            "
                <a href='class_submit.php?id=$id&&class=$class&&key=$key' class='new'>
                    <p class='plus'>+</p>
                    <p class='newSub'>New Submissions</p>
                </a>     
            ";
        }
    ?>
    
</body>
<script>

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

    function shownews(a){
        let id = a;
        let news = document.getElementById(id);

        news.setAttribute("class", "news-cover");
    }

    function hidenews(a){
        let id = a;
        let news = document.getElementById(id);

        news.setAttribute("class", "cover");
    }

    function showcomm(){
        let comments = document.getElementById("comm");

        b++;

        if(!even(b)){
            comments.style.display = "block";
        }
        else{
            comments.style.display = "none";
        }
    }

</script>
</html>