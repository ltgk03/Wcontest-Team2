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
        <h2>question</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>answer1</th>
                    <th>answer2</th>
                    <th>answer3</th>
                    <th>answer4</th>
                    <th>ranswer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['quest']; ?></td>
                            <td><?php echo $row['answer1']; ?></td>
                            <td><?php echo $row['answer2']; ?></td>
                            <td><?php echo $row['answer3']; ?></td>
                            <td><?php echo $row['answer4']; ?></td>
                            <td><?php echo $row['ranswer']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                                &nbsp;
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>

                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <a href="create.php">thêm câu hỏi</a>
    <a href="adminUI.php">quay về</a>
</body>

</html>