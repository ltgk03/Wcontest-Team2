<?php
include "config.php";
if (isset($_POST['submit'])) {
    $user = $_POST['userId'];

    $sql = "INSERT INTO question(quest,answer1,answer2,answer3,answer4,ranswer) VALUES ('$quest','$answer1','$answer2','$answer3','$answer4','$ranswer')";

$result = $conn->query($sql);

if ($result == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

?>