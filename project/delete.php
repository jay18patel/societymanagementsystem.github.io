<?php
include("registrationconn.php");
$id =$_GET['id']; 
$query="DELETE FROM registration where id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "record deleted";
}
else
{
	echo "delete failed";
}
?>