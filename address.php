<?php

    include "connect.php";
    session_start();

    $security1 = false;
    $security2 = false;
    $security3 = false;
    $id = $_GET['id'];

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if(isset($_SESSION['userkey'])){
        if(isset($_SESSION['userID'])){
            $security3 = true;
        }
    }

    $query = "SELECT * FROM admin";
    $result = mysqli_query($db, $query);

    $query2 = "SELECT * FROM users";
    $result2 = mysqli_query($db, $query2);

    if($result2){
        for($i=0; $i<mysqli_num_rows($result2); $i++){
            $row = mysqli_fetch_array($result2);

            if($id === $row['userkey']){
                if($ip === $row['security']){
                    $security2 = true;
                    break;
                }
            }
        }
    }

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                if($ip === $row['security']){
                    $security1 = true;
                    break;
                }
            }
        }
    }

    if(!$security1 && !$security2){
        header("location:login.html");
    }
    else if(!$security3){
        header("location:login.html");
    }
?>