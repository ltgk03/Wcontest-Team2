

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <h2> Signup form </h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Insert Question</legend>
            Question:<br>
            <input type="text" name="quest">
            <br>
            answer1:<br>
            <input type="text" name="answer1">
            <br>
            answer2:<br>
            <input type="text" name="answer2">
            <br>
            answer3:<br>
            <input type="text" name="answer3">
            <br>
            answer4:<br>
            <input type="text" name="answer4">
            <br>
            ranswer:<br>
            <input type="radio" name="ranswer" value="answer1">answer1
            <input type="radio" name="ranswer" value="answer2">answer2
            <input type="radio" name="ranswer" value="answer3">answer3
            <input type="radio" name="ranswer" value="answer4">answer4
            <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>

    <a href="view.php">xem cơ sở dữ liệu</a>
</body>

</html>

<?php
include "config.php";
if (isset($_POST['submit'])) {
    $quest = $_POST['quest'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $ranswer = $_POST['ranswer'];

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