<?php
//error_reporting(0);
$servername="localhost";
$username="root";
$passsword="";
$dbname="user";
$conn=mysqli_connect($servername,$username,$passsword,$dbname);
if($conn)
{
	echo"connection ok";
}
else
{
	echo"connection failed".mysqli_connect_error();
}
?>