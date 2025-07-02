<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $class = $_GET['class'];
    $key = $_GET['key'];

    $exists = false;

    $querychk = "SELECT * FROM classnews_views";
    $resultchk = mysqli_query($db, $querychk);

    if(mysqli_num_rows($resultchk)>0){
        for($i=0; $i<mysqli_num_rows($resultchk); $i++){
            $row = mysqli_fetch_array($resultchk);

            if($class === $row['class_key'] && $key === $row['news_key'] && $id === $row['viewer']){
                $exists = true;
            }
        }
    }

    if($exists){
        header("location: class_news2.php?id=$id&&class=$class&&key=$key");
    }
    else{
        $query = "INSERT INTO classnews_views(class_key, news_key, viewer) VALUES('$class', '$key', '$id')";
        $result = mysqli_query($db, $query);

        if($result){
            header("location: class_news2.php?id=$id&&class=$class&&key=$key");
        }
        else{
            echo "Error while adding viewer!";
        }
    }

?>