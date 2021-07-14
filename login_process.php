<?php
session_start();
include 'cafe_db.php';
// the box name to capture the value
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($con,"SELECT * FROM customer WHERE username ='$username' AND password ='$password' ");

$row=mysqli_fetch_array($sql);
$count =mysqli_num_rows($sql);

	if($count ==1)
	{
		if($row['level']=='1')
		{
			$_SESSION['username'] = $username;
			header("Location:index.php");
		}
		else
		{
			header("Location:form.php");
		}
	}
	else
	{
		echo "Incorrect username and password";
	}
?>