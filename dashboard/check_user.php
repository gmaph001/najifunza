<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

    $exist = false;

    $query = "SELECT * FROM admin";
    $result = mysqli_query($db, $query);

    $query2 = "SELECT * FROM users";
    $result2 = mysqli_query($db, $query2);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $exist = true;
                header("location:admin-account.php?id=$id");
                break;
            }
        }
    }

    if(!$exist){
        if($result2){
            for($i=0; $i<mysqli_num_rows($result2); $i++){
                $row = mysqli_fetch_array($result2);
        
                if($id === $row["userkey"]){
                    header("location:user-account.php?id=$id");
                    break;
                }
            }
        }
    }    