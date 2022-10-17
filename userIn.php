<?php


    include "config.php";

    $username = $_POST["uname"];
    $usergrade = $_POST["grade"];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    // if (mysqli_num_rows($result) === 1) {
    //     echo "Tên đăng nhập đã tồn tại, mời nhập lại";
    // } else 
    
    $sqli = "INSERT INTO user(username, usergrade) VALUES ('$username', '$usergrade')";
    $resulti = $conn->query($sqli);


?>