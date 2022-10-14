<?php
include "config.php";

// if (isset($_POST['update'])) {
//     $quest = $_POST['quest'];
//     $question_id = $_GET['id'];
//     $answer1 = $_POST['answer1'];
//     $answer2 = $_POST['answer2'];
//     $answer3 = $_POST['answer3'];
//     $answer4 = $_POST['answer4'];
//     $ranswer = $_POST['ranswer'];

//     $sql = "UPDATE question SET quest = '$quest', answer1 = '$answer1', answer2 = '$answer2', answer3 = '$answer3', answer4 = '$answer4',  ranswer = '$ranswer' WHERE id = '$question_id'";

//     $result = $conn->query($sql);

//     if ($result == TRUE) {
//         echo "<p>Record Updated Succesfully!</p>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
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
            <link rel="stylesheet" href="./assets/css/update.css">
        </head>

        <body>
            <h2 class = "update_form">Update form</h2>
            <form action="" method="POST">
                <fieldset class = "Fieldset">
                    <legend class = "Legend" >Update Question</legend>
                    <div class = "parent">
                        <div class = "child">
                    Question:<br>
                    <textarea id ="quest" type="text" name="quest">
                    </textarea>
    </div>
                    <br>
                    <div class = "child">
                    Answer1:<br>
                    <input type="text" name="answer1">
                    <br>
                    Answer2:<br>
                    <input type="text" name="answer2">
                    <br>
                    Answer3:<br>
                    <input type="text" name="answer3">
                    <br>
                    Answer4:<br>
                    <input type="text" name="answer4">
    				<br>
                    <br>
                    </div>
                     </div>
                    Ranswer:<br>
                    <br>
                    <input type="radio" name="ranswer" value="answer1">Answer1
                    <input type="radio" name="ranswer" value="answer2">Answer2
                    <input type="radio" name="ranswer" value="answer3">Answer3
                    <input type="radio" name="ranswer" value="answer4">Answer4
                    <br>
                    
                    
                    <input class = "button" type="submit" name="update" value="Update">
                </fieldset>
            </form>

            <a type = "button" href="view.php">Xem cơ sở dữ liệu.</a>
        </body>
</html>
<?php

    } else {
        header('Location: view.php');
    }
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
          echo "Update Successfully!";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
}

?>