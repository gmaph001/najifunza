<?php

    require "connect.php";

    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    $query3 = "SELECT * FROM admin";
    $result3 = mysqli_query($db, $query3);

    if($result){
        for($i=0; $i<mysqli_num_rows($result); $i++){
            $row = mysqli_fetch_array($result);

            $id = $row['userkey'];

            $old = $row['password'];

            $new = password_hash($old, PASSWORD_DEFAULT);

            $query2 = "UPDATE users SET password = '$new' WHERE userkey = '$id'";
            $result2 = mysqli_query($db, $query2);

            if($result2){
                echo "Success";

                for($j=0; $j<mysqli_num_rows($result3); $j++){
                    $row3 = mysqli_fetch_array($result3);

                    if($row['userkey'] === $id){
                        $query4 = "UPDATE admin SET password = '$new' WHERE userkey = '$id'";
                        $result4 = mysqli_query($db, $query4);

                        if($result4){
                            echo "Success";
                        }
                        else{
                            echo "Error";
                        }
                    }
                }
            }
            else{
                echo "Failure";
            }
        }
    }