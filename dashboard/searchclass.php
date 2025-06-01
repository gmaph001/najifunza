<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/results.css">
</head>
<body>
    <div class="tokeo2">
    <?php

        require_once("../connect.php");
        $id = $_GET['id'];

        $success = false;

        $size = 0;
        $classname = [];
        $classinitial = [];
        $classphoto = [];
        $classkey = [];

        if(isset($_POST['input'])){

            $input = $_POST['input'];

            $query = "SELECT * FROM classes WHERE class_name LIKE '{$input}%'";

            $result = mysqli_query($db, $query);

            if($result){
                while($row = mysqli_fetch_assoc($result)){

                    $classname[$size] = $row['class_name'];
                    $classphoto[$size] = $row['class_photo'];
                    $classkey[$size] = $row['class_key'];
                    $name = str_split($classname[$size]);
                    $classinitial[$size] = $name[0];
                    $size++;
                }
            }


            if($size>0){
                for($j=$size-1; $j>=0; $j--){
                    echo 
                        "
                                <div class='class'>
                                    <div class='class-photo' style='background-image: url(../$classphoto[$j]);'>
                                        <div class='class-initials'>$classinitial[$j]</div>
                                    </div>
                                    <div class='class-name'>
                                        <h2>$classname[$j]</h2>
                                    </div>
                        ";

                        $query = "SELECT * FROM my_classes";
                        $result = mysqli_query($db, $query);

                        if(mysqli_num_rows($result)>0){
                            for($k=0; $k<mysqli_num_rows($result); $k++){
                                $row = mysqli_fetch_array($result);

                                if($classkey[$j] === $row['class_key']){
                                    if($id === $row['userkey']){
                                        $success = true;
                                    }
                                }
                            }
                        }

                        if($success){
                            echo 
                            "
                                <div class='class-btns'>
                                    <a href='class3.php?id=$id&&class=$classkey[$j]' class='enter'>Enter</a>
                                </div>
                            ";
                        }
                        else{
                            echo 
                            "
                                <div class='class-btns'>
                                    <a href='join_class.php?id=$id&&class=$classkey[$j]' class='join'>Join</a>
                                </div>
                            ";
                        }                    
                    
                    echo 
                    "
                        </div>   
                    ";
                }
            }
            else{
                echo "<p>No class found!</p>";
            }

        }
    ?>
    </div>
</body>
</html>