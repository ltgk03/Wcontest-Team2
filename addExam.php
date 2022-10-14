<?php
include "config.php";

$sql = "SELECT *FROM question";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>New exam:</h2>
        <form action = "" method = "POST">
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
                <input type="text" name="ranswer">
                <br>
            </fieldset>
            <button type="submit" name="submit" value="submit"> Save </button>
        </form>
    </div>

    <a href="create.php">thêm câu hỏi</a>
    <a href="adminUI.php">quay về</a>
</body>

<script>

</script>

</html>