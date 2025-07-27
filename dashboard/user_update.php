<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $otp = rand(100000, 999999);

        $query = "UPDATE users SET OTP = '$otp' WHERE userkey = '$id'";
        $result = mysqli_query($db, $query);

        if($result){
            echo $email;
            echo "<br>";
            echo $username;
            header("location:verify_user.php?id=$id&&email=$email&&user=$username");
        }
        else{
            echo "Error while requesting otp!";
        }
    }