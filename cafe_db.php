<?php
$con=mysqli_connect("localhost","root",""); //connect to the host
$db=mysqli_select_db($con,"cafe_db"); //connect to database

if(!$con || !$db)
{
	echo "Not sucessfully connected to database or host";
}

else
{
	echo "sucessfully connected to database and host";
}

?>