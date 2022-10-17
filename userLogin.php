<?php
    include "config.php";
    session_start();
    if(isset($_POST['userId'])) {
        $userId = $_POST['userId'];
        $sql = "SELECT userId FROM usergrade WHERE userId = '$userId'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userId'] === $userId) {
            echo "Logged in";
            $_SESSION['userId'] = $_POST['userId'];
            header("Location: questions.php");
            exit();
            } else {
                header("Location: index.php?error=Invalid ID");
            }

        } else {
            header("Location: index.php?error=Invalid ID");
        }
    
    
    
    
    
    
    
    }
    ?>
