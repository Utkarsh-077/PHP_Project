<?php
include("connection.php");
#if (isset($_POST['submit']))

    
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    echo "signing up holdon";
    $result = mysqli_query($con, "insert into login (username, password) values ('$username','$password')");  
    if($result)
	{
		#echo "Registration Successfully";
		echo "<script> window.location.assign('success.html'); </script>";
	}
	else{
		echo "failed:";
	}
?>