<?php

session_start();

if (isset($_SESSION('userId'))) {
    ?>

<?php include "config.php";



$sql = "SELECT * FROM question";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="question"><?php echo $row['quest'];?></div>
            <form action= "" method="POST">
                <input type="radio" value="answer1">A. <?php echo $row['answer1']; ?>
                <input type="radio" value="answer2">B. <?php echo $row['answer2']; ?>
                <input type="radio" value="answer3">C. <?php echo $row['answer3']; ?>
                <input type="radio" value="answer4">D. <?php echo $row['answer4']; ?>

                
            </form>
        
        
    <?php
        }
    } ?>





</body>
</html>

<?php } ?>