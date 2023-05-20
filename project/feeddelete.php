<?php
include("feedbackconn.php");
$id=$_GET['id']; 
$query="DELETE FROM feedback where id='$id'";
$Data=mysqli_query($conn,$query);
if($Data)
{
	echo "record deleted";
}
else
{
	echo "delete failed";
}
?>