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

        if(isset($_POST['input'])){

            $input = strtoupper($_POST['input']);

            $query = "SELECT * FROM notes WHERE subject LIKE '{$input}%' OR description LIKE '{$input}%'";

            $result = mysqli_query($db, $query);

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    if($id === $row['poster_ID']){
                        $subject[$size] = $row['subject'];
                        $notes[$size] = $row['notes'];
                        $topic[$size] = $row['description'];
                        $size++;
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