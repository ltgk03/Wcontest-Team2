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
  <title>Document</title>
  <!-- API (Bootstrap for design, Ajax for DOM)-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!--Icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="./assets/css/view.css">
</head>

<body>

<h2>ALL QUESTION</h2>
<br>
<div class="container table-responsive">
<table class="table table-bordered table-hover table-sm ctable" style="background-color: #25408f; color: #F7F7F7; border-radius: 10px">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th style="overflow-x: clip" scope="col">Question</th>
      <th scope="col">Answer1</th>
      <th scope="col">Answer2</th>
      <th scope="col">Answer3</th>
      <th scope="col">Answer4</th>
      <th scope="col">Right Answer</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <th scope="col"><?php echo $row['id']; ?></th>
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
</div>

<!-- </table>
    <div class="container">
        
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

            </tbody>
        </table>
    </div>

    <a href="create.php">thêm câu hỏi</a>
    <a href="adminUI.php">quay về</a> -->
</body>

</html>