<?php
include "config.php";

if (isset($_POST['update'])) {
    $quest = $_POST['quest'];
    $question_id = $_GET['id'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $ranswer = $_POST['ranswer'];

    $sql = "UPDATE question SET quest = '$quest', answer1 = '$answer1', answer2 = '$answer2', answer3 = '$answer3', answer4 = '$answer4',  ranswer = '$ranswer' WHERE id = '$question_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record Updated Succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_GET['id'])) {
    $question_id = $_GET['id'];

    $sql = "SELECT *FROM question WHERE id = '$question_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $quest = $row['quest'];

            $question_id = $row['id'];
            $answer1 = $row['answer1'];
            $answer2 = $row['answer2'];
            $answer3 = $row['answer3'];
            $answer4 = $row['answer4'];
            $ranswer = $row['ranswer'];
        }

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>

        <body>
            <h2>update form</h2>
            <form action="" method="POST">
                <fieldset>
                    <legend>Update Question</legend>
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
                    <input type="submit" name="update" value="update">
                </fieldset>
            </form>

            <a href="view.php">xem cơ sở dữ liệu</a>
        </body>

        </html>

<?php
    } else {
        header('Location: view.php');
    }
}

?>