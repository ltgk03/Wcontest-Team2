<?php
include "config.php";

$sql = "SELECT * FROM examlist";
$result = $conn->query($sql);

echo "<table class = \"table\">";
echo "<thead><tr>";
echo "<th scope = \"col\" >";
echo "Exam ID";
echo "</th>";

echo "<th scope = \"col\" >";
echo "Exam name";
echo "</th>";

echo "<th scope = \"col\" >";
echo "Due date";
echo "</th>";

echo "<th scope = \"col\" >";
echo "Status";
echo "</th>";

echo "<th scope = \"col\" >";
echo "Average test time";
echo "</th>";

echo "</tr></thead>";

if ($result->num_rows > 0) {
    echo "<thead>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th scope = \"col\" >";
        echo $row['examid'];
        echo "</th>";

        echo "<th scope = \"col\" >";
        echo $row['examname'];
        echo "</th>";

        echo "<th scope = \"col\" >";
        echo $row['examdate'];
        echo "</th>";

        echo "<th scope = \"col\" >";
        echo $row['examstatus'];
        echo "</th>";

        echo "<th scope = \"col\" >";
        echo $row['examaveragetime'];
        echo "</th>";

        echo "</tr>";
    }
    echo "</tr></thead>";
    
}
echo "</table>";
?>
