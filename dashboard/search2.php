<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="results.css">
</head>
<body>
    <div class="tokeo">
    <?php

        require_once("../connect.php");
        $id = $_GET['id'];

        $size = 0;
        $subject = [];
        $notes = [];
        $topic = [];

        $size2 = 0;
        $key = [];

        if(isset($_POST['input'])){

            $input = strtoupper($_POST['input']);

            $query = "SELECT * FROM notes WHERE subject LIKE '{$input}%' OR description LIKE '{$input}%'";

            $result = mysqli_query($db, $query);

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $query2 = "SELECT * FROM saved";
                    $result2 = mysqli_query($db, $query2);

                    if($result2){
                        for($i=0; $i<mysqli_num_rows($result2); $i++){
                            $row2 = mysqli_fetch_array($result2);

                            if($id === $row2['saver']){
                                $key[$size2] = $row2['saved_key'];
                                $size2++;
                            }
                        }

                    }

                    for($j=$size2-1; $j>=0; $j--){
                        if($key[$j] === $row['notes_key']){
                            $subject[$size] = $row['subject'];
                            $notes[$size] = $row['notes'];
                            $topic[$size] = $row['description'];
                            $size++;
                        }
                    }
                }
            }


            if($size>0){
                for($i=$size-1; $i>=0; $i--){
                    echo "<p><a href='../$notes[$i]'>$subject[$i] <br> Description: $topic[$i]</a></p>";
                    echo "<br>";
                }
            }
            else{
                echo "<p>No notes found!</p>";
            }

        }
    ?>
    </div>
</body>
</html>