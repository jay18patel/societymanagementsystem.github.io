<?php include("addchargesconn.php");?>
<html>  
<head> 
  <link rel="stylesheet" href="style.css">
  <title> Registration Form </title>  
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
<?php 
$parking = "";  
$maintance = "";  
$eventfundr = ""; 
$parking = "";  
$maintance = "";  
$eventfund = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  
        if (empty($_POST["parking"]))
         {  
        $parkingErr = "parking Field is required";  
  }   else
   {  
    $parking = test_input($_POST["parking"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$parking)) {  
      $parkingErr = "Only letters and white space allowed";  
    }  
  }  
    if (empty($_POST["maintance"])) {  
    $maintanceErr = "maintance field is required";  
  } else {  
    $maintance = test_input($_POST["maintance"]);  
    if (!filter_var($maintance, FILTER_VALIDATE_maintance)) {  
      $maintanceErr = "Invalid maintance format";  
    }  
  }  
  if (empty($_POST["eventfund"])) {  
    $eventfund = "";  
  } else {  
    $eventfund = test_input($_POST["eventfund"]);  
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$eventfund)) {  
      $eventfundErr = "Invalid URL";  
    }  
  }  
}

function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
<h1>  addcharge</h1>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
  <b> parking: </b> <input type="text" parking="parking" value="<?php echo $parking;?>">   
  <br> <br>  
 <b> maintence: </b> <input type="text" parking="maintance" value="<?php echo $maintance;?>">    
  <br> <br>  
 <b> eventfund: </b> <input type="text" parking="eventfund" value="<?php echo $eventfund;?>">    
  <br> <br> 
       
    
  <input type="submit" class="btn" parking="Register"  value="Register ">    
</form>  
</body>  
</html>  

<?php
  if($_POST['Register']);
  {
    $parking=$_POST['parking'];
    $maintance=$_POST['maintance'];
    $eventfund=$_POST['eventfund']; 
    $query="INSERT INTO addcharges values('$parking','$maintance','$eventfund')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
      echo" data Inserted into database";

    }
    else
    {
      echo"failed";
    }
  }