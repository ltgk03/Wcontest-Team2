

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/create.css">
</head>

<body>
    <h2> Signup form </h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Insert Question</legend>
            <div class="form-group">
                <label class="control-label col-sm-2">Question </label>
                <div class="col-sm-10">
                    <input type="text" name="quest" class="form-control">
                </div>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="uploadfile" value="" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Answer 1</label>
                <div class="col-sm-10">
                    <input type="text" name="answer1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Answer 2</label>
                <div class="col-sm-10">
                    <input type="text" name="answer2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Answer 3</label>
                <div class="col-sm-10">
                    <input type="text" name="answer3" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Answer 4</label>
                <div class="col-sm-10">
                    <input type="text" name="answer4" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Right answer</label>
                <div id="ratio-question" class="ratio col-sm-10">
                    <input type="radio" name="ranswer" value="answer1">answer1
                    <input type="radio" name="ranswer" value="answer2">answer2
                    <input type="radio" name="ranswer" value="answer3">answer3
                    <input type="radio" name="ranswer" value="answer4">answer4
                </div>
            </div>
            <div class="form-group">
                <div class="control-label col-sm-2">
                    <span class="glyphicon glyphicon-print"></span>    
                    <input type="submit" name="submit" value="submit">
                </div>
            </div>
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

    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./assets/image/" . $filename;
    $check_uploaded = true;
    if (!is_uploaded_file($tempname)) $check_uploaded = false;
    
    if ($check_uploaded == false) {
        $sql = "INSERT INTO question(quest,answer1,answer2,answer3,answer4,ranswer) VALUES ('$quest','$answer1','$answer2','$answer3','$answer4','$ranswer')";
    } else {
        $sql = "INSERT INTO question(quest,filepath, answer1,answer2,answer3,answer4,ranswer) VALUES ('$quest','$filename' ,'$answer1','$answer2','$answer3','$answer4','$ranswer')";
        if (!move_uploaded_file($tempname, $folder)) {
            echo "<h3> Image not uploaded successfully!</h3>";
        }
    }

$result = $conn->query($sql);

if ($result == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}


?>
