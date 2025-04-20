<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $key = $_GET['key'];

    $query = "SELECT * FROM saved";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['saver']){
                $query2 = "DELETE FROM saved WHERE saved_key = '$key'";
                $result2 = mysqli_query($db, $query2);

                if($result2){
                    header("location:saved.php?id=$id");
                }
                else{
                    echo "Error while removing your saved material!";
                }
            }
        }
    }