
<?php 
include("feedbackconn.php");
//error_reporting(0);


$query="SELECT * FROM feedback";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo $result['Flatno']." ".$result['feedback'];
//echo $total;
if($total >=0)
	
	{
		?>
		<html>
		<head>
			<title></title>
<style>
			.error {   
color: white;  
    font-family: lato;  
    background: white;  
    display: inline-block;  
    padding: 2px 10px;  
}  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
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
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: black;  
    text-transform: uppercase;  
}  
label {  
    width: 150px;  
    display: inline-block;  
    text-align: left;  
    font-size: 1.5rem;  
    font-family: 'Lato';  
}  
input {  
    border: 2px solid #ccc;  
    font-size: 1.5rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 25px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    width: 500px;  
    background: #f3e7e9;  
}  
.tr1{

height: 93px;
width: 41;

}
div.form-element {  
    margin: 20px 0;  
}  
input[type=submit]::after {    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  

		</head>
		<body>
			<nav class="MB">
<ul><button><a href="registration.php">Addmember</a></button></ul>
  <ul><button><a href="addchar2.php">Addchharges</a></button></ul>

  <ul><button><a href="display.php">editmember</a></button></ul>

  <ul><button><a href="feedbackdisply.php">viewfeedback</a></button></ul>
    <ul><button><a href="logout.php">logout</a></button></ul>
</nav>


<center>
		</body>
		<center><table border="3" cellspacing="7" width="70%" height="10%">
			<tr>
							<th width="10%" class="tr1">id</th>

			<th width="10%" class="tr1">Flatno</th>
    		<th width="50%">feedback</th>
    		

</tr>

		<?php
	while($result=mysqli_fetch_assoc($data))
	{
	echo "<tr>
			<td>".$result['id']."</td>
			<td>".$result['Flatno']."</td>
    		<td>".$result['feedback']."</td>
    		<td> <a href='feeddelete.php'> 
    		<input type='submit' value='delete' class='update'></a></td>

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

