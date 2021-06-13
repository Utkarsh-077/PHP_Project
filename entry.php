<?php
include("connect.php");
#if (isset($_POST['submit']))

    
    $username = $_POST['user'];  
    $password = $_POST['pass'];
	$gmail_id= $_POST['gmail'];
	$dob = $_POST['dob'];
	$university = $_POST['uni'];

    echo "signing up holdon";
    $result = mysqli_query($con, "insert into login2 (username, password, gmail_id, university, dob) values ('$username','$password','$gmail_id','$university','$dob')");  
    if($result)
	{
		#echo "Registration Successfully";
		echo "<script> window.location.assign('success.html'); </script>";
	}
	else{
		echo "failed:";
	}
?>