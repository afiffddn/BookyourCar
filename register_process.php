<?php
include 'cafe_db.php';

$customer_name =$_POST['fname'];
$customer_add =$_POST['address'];
$customer_table =$_POST['table'];
$customer_date =$_POST['pd'];
$customer_serialnum =$_POST['sn'];

$sql=mysqli_query($con, "INSERT INTO 
	customer(name,address,username,datebooking,serialnumber) 
	VALUES('$customer_name','$customer_add','$customer_table','$customer_date','$customer_serialnum')");

if(!$sql)
{
	echo "Fail to add record";
}
else
{
	echo "Successfully Add 1 record";
}

?>