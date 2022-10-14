<?php

session_start();
include "config.php";

if (isset($_POST['userId'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $userId = validate($_POST['userId']);
    
    
}



$sql = "SELECT * FROM usergrade WHERE userId = '$userId'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['userId'] == $userId) {
        echo "Logged in";
        $_SESSION['userId'] = $row['userId'];
        header('Location: user.php');
        exit();
    } 
    else {
        echo "<h1> Login failed. Invalid id.</h1>";  
        header("Location: index.php?error=Incorrect id");
        exit();
    }
} else{

    header("Location: index.php?error= c");
    

    exit();

}
?>
