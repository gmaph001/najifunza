<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $key = $_GET['key'];

    $exist = false;

    $query = "SELECT * FROM saved";
    $result = mysqli_query($db, $query);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            if($id === $row['saver']){
                $query2 = "DELETE FROM saved WHERE saved_key = '$key'";
                $result2 = mysqli_query($db, $query2);

                if($result2){
                    $query3 = "SELECT * FROM admin";
                    $result3 = mysqli_query($db, $query3);

                    if($result3){
                        for($j=0; $j<mysqli_num_rows($result3); $j++){
                            $row2 = mysqli_fetch_array($result3);

                            if($row2['userkey'] === $id){
                                $exist = true;
                            }
                        }
                    }
                }
                else{
                    echo "Error while removing your saved material!";
                }
            }
        }

        if($exist){
            header("location:saved2.php?id=$id");
        }
        else{
            header("location:saved.php?id=$id");
        }
    }