<?php

    require "../connect.php";
    require "address.php";
    require "timer.php";

    $id = $_GET['id'];
    $key = $_GET['key'];

    if(isset($_POST['submit'])){

        $poster = $_POST['poster'];
        $description = $_POST['descript'];

        $query = "SELECT * FROM notes";
        $result = mysqli_query($db, $query);

        if($result){
            for($i=0; $i<mysqli_num_rows($result); $i++){
                $row = mysqli_fetch_array($result);

                if($key === $row['notes_key']){
                    $query2 = "UPDATE notes SET poster = '$poster', description = '$description' WHERE notes_key = '$key'";
                    $result3 = mysqli_query($db, $query2);

                    if($result2){
                        header("location:notes.php?id=$id");
                    }
                    else{
                        echo "Error while editing notes";
                    }
                }
            }
        }
    }