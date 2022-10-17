<?php session_start();
include "config.php";

if (isset($_POST['adminAcc']) && isset($_POST['adminPass'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Acc = validate($_POST['adminAcc']);
    $Pass = validate($_POST['adminPass']);
}



$sql = "SELECT * FROM adminn WHERE adminAcc = '$Acc' and adminPass ='$Pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['adminAcc'] === $Acc && $row['adminPass'] === $Pass) {
        echo "Logged in";
        $_SESSION['adminAcc'] = $row['adminAcc'];
        $_SESSION['id'] = $row['id'];
        header('Location: adminUI.php');
        exit();
    } 
    else {
        echo "<h1> Login failed. Invalid username or password.</h1>";  
        header("Location: adminLogin.php?error=Incorrect username or password");
        exit();
    }
} else{

    header("Location: adminLogin.php?error=Incorect User name or password");

    exit();

}
?>
