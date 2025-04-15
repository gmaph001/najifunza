<?php

    require "connect.php";

    $id = $_GET['id'];
    $nothing = "out";

    $query1 = "SELECT * FROM admin";
    $query2 = "SELECT * FROM users";

    $result1 = mysqli_query($db, $query1);
    $result2 = mysqli_query($db, $query2);

    for($i=0; $i<mysqli_num_rows($result1); $i++){
        $row = mysqli_fetch_array($result1);

        if($id === $row['userkey']){
            $query = "UPDATE admin SET security = '$nothing' WHERE userkey = '$id'";
            $result = mysqli_query($db, $query);

            if($result){
                header("Location: login.html");
            }
            else{
                echo "Error while updating data!";
            }
        }
    }

    for($i=0; $i<mysqli_num_rows($result2); $i++){
        $row = mysqli_fetch_array($result2);

        if($id === $row['userkey']){
            $query = "UPDATE users SET security = '$nothing' WHERE userkey = '$id'";
            $result = mysqli_query($db, $query);

            if($result){
                header("Location: login.html");
            }
            else{
                echo "Error while updating data!";
            }
        }
    }
?>