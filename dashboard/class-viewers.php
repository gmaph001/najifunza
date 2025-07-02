<?php
    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];
    $key = $_GET['key'];

    $dp = [];
    $username = [];
    $size = 0;

    $query = "SELECT * FROM classnews_views";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($class === $row['class_key'] && $key === $row['news_key']){
                $user = $row['viewer'];

                $query2 = "SELECT * FROM users";
                $result2 = mysqli_query($db, $query2);

                if($result2){
                    for($j=0; $j<mysqli_num_rows($result2); $j++){
                        $row2 = mysqli_fetch_array($result2);

                        if($user === $row2['userkey']){
                            $dp[$size] = $row2['photo'];
                            $username[$size] = $row2['username'];
                            $size++;
                        }
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <?php
        if($size <= 0){
            echo 
            "
                <div class='viewer-account'>
                    <span class='viewer-user' style='text-align: center;'><b>No Views</b></span>
                </div>
            ";
        }
        else{
            for($i=$size-1; $i>=0; $i--){
                echo 
                "
                    <div class='viewer-account'>
                        <img src='../$dp[$i]' class='viewer-dp'>
                        <span class='viewer-user'>$username[$i]</span>
                    </div>
                ";
            }
        }
    ?>
       
                    
</body>
</html>