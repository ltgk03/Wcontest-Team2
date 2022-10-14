include "config.php";
$sql = "SELECT *FROM question";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/questions.css">
</head>
<body>
<div class="container">
        <h2>Questions</h2>
        <form action = "" method = "POST">
            <?php
            if ($result->num_rows > 0) {
                $dem = 0;
                while ($row = $result->fetch_assoc()) {
            ?>
                <form>
                    <div class = "question_section">
                        <div class = "question"><?php echo $row['quest']; ?></div>
                        <div class = "answers">
                            <input type="radio" name="ans" value="answer1"><?php $dem++; echo " ".$dem.". ".$row['answer1']; ?><br>
                            <input type="radio" name="ans" value="answer2"><?php $dem++; echo " ".$dem.". ".$row['answer2']; ?><br>
                            <input type="radio" name="ans" value="answer3"><?php $dem++; echo " ".$dem.". ".$row['answer3']; ?><br>
                            <input type="radio" name="ans" value="answer4"><?php $dem++; echo " ".$dem.". ".$row['answer4']; ?><br>
                        </div>

                    </div>
                </form>
            <?php
                $dem = 0;
                }
            }
            ?>
            <button type = "submit" class = "btn btn-info"> Submit </button>
        </form>
    </div>
</body>
</html>