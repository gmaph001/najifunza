<?php

    require "connect.php";
    require "address.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM admin";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['userkey']){
                $otp = $row['OTP'];
            }
        }
    }

    if(isset($_POST['login'])){
        $key = $_POST['key'];

        if($key === $otp){
            header("location:home.php?id=$id");
        }
        else{
            $query2 = "DELETE FROM admin WHERE userkey = '$id'";
            $result2 = mysqli_query($db, $query2);

            if($result2){
                echo "Invalid OTP <br> <a href='login.html'>Try Again</a>";
            }
            else{
                echo "Error while checking OTP!";
            }
        }
    }