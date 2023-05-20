<html>
<head>
	<title>edit member detail</title>
  
<style >
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px; 
    background-image: url(images/s1.jpg);
    background-size: cover;  
} 
		nav.MB{

display: flex;
align-items: right;
flex-wrap: nowrap;
    justify-content: space-around;


}


nav.MB:hover{

color: blue;
flex-wrap: nowrap;
    justify-content: space-around;
}
	</style>
	<body>
		    

		<nav class="MB">
<ul><button><a href="registration.php">Addmember</a></button></ul>
  <ul><button><a href="addchar2.php">Addchharges</a></button></ul>

  <ul><button><a href="display.php">editmember</a></button></ul>

  <ul><button><a href="feedbackdisply.php">viewfeedback</a></button></ul>
    <ul><button><a href="logout.php">logout</a></button></ul>
</nav>

	</body>
</head>
</html>
<?php
include("registrationconn.php");
//error_reporting(0);
$query="SELECT * FROM registration";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo $result['name']." ".$result['email']." ".$result['phonenumber']." ".$result['flatno']." ".$result['gender'];
//echo $total;
if($total >=0)
	
	{
		?>
		<center>
			<table border="3" cellspacing="7" width="70%">
			<tr>
			<th width="5%">ID</th>
<th width="10%">Name</th>

			<th width="20%">Email</th>
			<th width="10%">Phonenumber</th>
			<th width="5%">Flatno</th>
    		<th width="5%">Gender</th>
    		<th width="15%">oprations</th>

</tr>

		<?php
	while($result=mysqli_fetch_assoc($data))
	{
	echo "<tr>
			<td>".$result['id']."</td>
			<td>".$result['name']."</td>
			<td>".$result['email']."</td>
			<td>".$result['phonenumber']."</td>
			<td>".$result['flatno']."</td>
    		<td>".$result['gender']."</td>
    		<td>
    	 <a href='delete.php?id=$result[id]'> 
    		<input type='submit' value='delete' class='delete'></a></td>

</tr>";
	
}
}

else 
	{
		echo"no records found";
} 


?>
</table>
</center>

