<?php
	include 'connection.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM signup WHERE username ='$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);

	if($result)
	{
				$row = mysqli_fetch_assoc($result);
				$_SESSION["user"] = $row['username'];
				$_SESSION['password'] = $row['password'];
				header("location:index2.php");
	}
	else
	{
		
	echo "invalid username or password";
	}

	
?>