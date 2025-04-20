<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];

    if(isset($_POST['profile'])){
        $firstname = $_POST['firstname'];
        $secondname = $_POST['secondname'];
        $lastname = $_POST['lastname'];
        $school = $_POST['school'];

        $query = "SELECT * FROM admin";
        $result = mysqli_query($db, $query);

        if($result){
            for($i=0; $i<mysqli_num_rows($result); $i++){
                $row = mysqli_fetch_array($result);

                if($id === $row['userkey']){
                    $query2 = "UPDATE admin SET firstname = '$firstname', secondname = '$secondname', lastname = '$lastname', school = '$school' WHERE userkey = '$id'";
                    $result2 = mysqli_query($db, $query2);

                    if($result2){
                        header("location:admin-account.php?id=$id");
                    }
                    else{
                        echo "Error while updating profile!";
                    }
                }
            }
        }
    }