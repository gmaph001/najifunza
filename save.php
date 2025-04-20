<?php

    require "connect.php";
    require "address.php";

    $id = $_GET['id'];
    $key = $_GET['key'];
    $lev = $_GET['lev'];
    $class = $_GET['class'];
    $cat = $_GET['cat'];
    $subject = $_GET['subject'];

    $category = "notes";

    $query = "INSERT INTO saved(category, saver, saved_key) VALUES('$category', '$id', '$key')";
    $result = mysqli_query($db, $query);

    if($result){
        header("location:somo2.php?id=$id&&lev=$lev&&class=$class&&cat=$cat&&subject=$subject");
    }
    else{
        echo "Error while saving notes!";
    }