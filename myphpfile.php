<?php
include('connection.php');

$sql = "SELECT * FROM login"; //You don't need a ; like you do in SQL
$result = mysqli_query($con, $sql);

echo "<table>"; // start a table tag in the HTML

echo"name &nbsp| &nbsp password";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";
