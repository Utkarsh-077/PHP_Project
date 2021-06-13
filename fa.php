<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{ 
        border: 4px solid black;
        padding: auto;
        height: 5cm;
        width: 10cm;
        


    }
    td{
        color: lime;
        text-align: center;
        height: 1cm;
        width: 1cm;
        border: 2px solid black;


    }
 </style>
</head>
<body style="background-color: #006B54;">
<?php
include('connection.php');

$sql = "SELECT * FROM login2"; //You don't need a ; like you do in SQL
$result = mysqli_query($con, $sql);

echo "<table>"; // start a table tag in the HTML

#echo"name &nbsp| &nbsp password";
echo "<tr><td><b>Username</td><td><b>D.O.B</b></td><td><b>gmail_id</b></td><td><b>University</b></td></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['username'] . "</td><td>" . $row['dob'] ."</td><td>" . $row['gmail_id'] ."</td><td>" . $row['university'] ."</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";
?>

    
</body>
</html>