<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=qrabiloo", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = $conn->prepare("SELECT * FROM question ORDER BY RAND() LIMIT 10");
    $sql->execute();
    // $index = 1;
    // $data='';
    
    echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_UNESCAPED_UNICODE);



?>