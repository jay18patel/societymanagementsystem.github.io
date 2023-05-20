<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>

<h1>THIS IS USER HOME PAGE</h1><?php echo $_SESSION["username"] ?>

<nav class="MB">
<ul><button><a href="feedback.php">give feedback</a></button></ul>
    <ul><button><a href="logout.php">logout</a></button></ul>
</nav>

</body>
</html>