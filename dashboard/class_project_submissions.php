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

    $query4 = "SELECT * FROM class_projects";
    $result4 = mysqli_query($db, $query4);

    if($result4){
        for($i=0; $i<mysqli_num_rows($result4); $i++){
            $row = mysqli_fetch_array($result4);

            if($key === $row['proj_key'] && $class === $row['class']){
                $name = $row['proj_name'];
                $aim = $row['proj_aim'];
                $type = $row['proj_type'];
                $proof = $row['proj_proof'];
                $documentation = $row['documentation'];
                $due = $row['proj_due'];
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAJIFUNZA | Class Submissions</title>
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/submit.css">
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
            <div class="submissions">
                <?php echo "<form action='class_project_action2.php?id=$id&&class=$class&&key=$key' method='POST' enctype='multipart/form-data'>";?>
                    <fieldset class="enclose">
                        
                        <?php
                            echo 
                            "
                                <legend>$name</legend>
                                <h2>Aim of Project</h2>
                                <p>$aim</p><br>
                                <h2>Instructions</h2>
                                <p>
                                    This project accepts only <b>$documentation</b> format.<br>
                                    This project should be done by <b>$type</b>.<br>";
                            if($proof === "yes"){
                                echo 
                                "
                                    This project accepts video proof for submission!<br>
                                ";
                            }
                            else{
                                echo 
                                "
                                    This project does not accept video proof for submission!<br><br>
                                ";
                            }
                            echo
                            "   
                                    You can now submit your first file below:
                                </p><br>
                            ";
                            if($documentation === "document"){
                                echo 
                                "
                                    <input type='file' class='fileinput' id='sub' name='submission' accept='.pdf,.doc,.docx'";?> onchange="checkform(<?php echo "'$format'";?>)"<?php echo " required>
                                ";
                            }
                            else if($documentation === "presentation"){
                                echo 
                                "
                                    <input type='file' class='fileinput' id='sub' name='submission' accept='.ppt,.pptx'";?> onchange="checkform(<?php echo "'$format'";?>)"<?php echo " required>
                                ";
                            }
                            else if($documentation === "code"){
                                echo 
                                "
                                    <input type='file' class='fileinput' id='sub' name='submission' accept='.cpp,.js,.html,.css,.php,.py,.java'";?> onchange="checkform(<?php echo "'$format'";?>)"<?php echo " required>
                                ";
                            }
                            else if($documentation === "video"){
                                echo 
                                "
                                    <input type='file' class='fileinput' id='sub' name='submission' accept='.mp4'";?> onchange="checkform(<?php echo "'$format'";?>)"<?php echo " required>
                                ";
                            }
                            else if($documentation === "spreadsheet"){
                                echo 
                                "
                                    <input type='file' class='fileinput' id='sub' name='submission' accept='.xls,.xlsx'";?> onchange="checkform(<?php echo "'$format'";?>)"<?php echo " required>
                                ";
                            }
                        ?>
                        <p class="alert" id="warn"></p>
                        <input type="text" name="date" id="tar" style="display: none;">
                        <input type="text" name="time" id="saa" style="display: none;">
                        <input type="text" name="type" id="fmt" style="display: none;">
                        <?php echo "<button class='submit' name='submit'";?> onclick="check(<?php echo "'$format'";?>)" <?php echo ">Submit</button>";?>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
<script>

    let a = 0;
    let b = 0;

    let all = new Date();
    let day = all.getDate();
    let month = all.getMonth();
    month++;
    if(month<10){
        month = "0"+month;
    }
    let year = all.getFullYear();
    let hrs = all.getHours();
    if(hrs<10){
        hrs = "0"+hrs;
    }
    let min = all.getMinutes();
    if(min<10){
        min = "0"+min;
    }

    let today = day+"-"+month+"-"+year;
    let time = hrs+":"+min;

    document.getElementById("tar").value = today;
    document.getElementById("saa").value = time;

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

    function checkform(a){
        console.log(a);

        let returnvalue = false;

        let sub = document.getElementById("sub");
        let ukubwa = Math.round(sub.files[0].size/1024/1024);

        let type = "";
        let t = "";

        let file = document.getElementById("sub").value;

        for(let i=file.length-1; i>=0; i--){
            if(file[i] === "."){
                break;
            }
            else{
                t += file[i];
            }
        }

        for(let i=t.length-1; i>=0; i--){
            type += t[i];
        }

        document.getElementById("fmt").value = type;

        if(a === "code" || a === "photo"){
            if(ukubwa > 2){
               document.getElementById("warn").innerHTML = "Your file should be less than 2MB!"; 
            }
            else{
                document.getElementById("warn").innerHTML = "";

                if(a === "code"){
                    if(type === "js" || type === "cpp" || type === "html" || type === "css" || type === "py" || type === "php"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
                else if(a === "photo"){
                    if(type === "jpg" || type === "png" || type === "jpeg"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
            }
        }
        else if(a === "video" || a === "presentation" || a === "document" || a === "spreadsheet"){
            if(ukubwa > 10){
               document.getElementById("warn").innerHTML = "Your file should be less than 10MB!"; 
            }
            else{
                document.getElementById("warn").innerHTML = "";
                
                if(a === "video"){
                    if(type === "mp4"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
                else if(a === "presentation"){
                    if(type === "ppt" || type === "pptx"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
                else if(a === "document"){
                    if(type === "doc" || type === "docx" || type === "pdf"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
                else if(a === "spreadsheet"){
                    if(type === "xls" || type === "xlsx"){
                        document.getElementById("warn").innerHTML = ""; 
                        returnvalue = true;
                        console.log(returnvalue);
                    }
                    else{
                        document.getElementById("warn").innerHTML = "Invalid format!"; 
                    }
                }
            }
        }

        console.log(type);

        console.log(returnvalue)

        return returnvalue;

    }

    function check(a){
        if(!checkform(a)){
            alert("Please check for the format or size of the file you are trying to submit!");
            event.preventDefault();
        }
    }

</script>
</html>