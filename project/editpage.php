 <?php include("registrationconn.php");
$id =$_GET['id']; 
$query="SELECT * FROM registration where id='$id' ";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
$result =mysqli_fetch_assoc($data);


?>

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
  <nav class="MB">
<ul><button><a href="registration.php">Addmember</a></button></ul>
  <ul><button><a href="addchar2.php">Addchharges</a></button></ul>

  <ul><button><a href="display.php">editmember</a></button></ul>

  <ul><button><a href="feedbackdisply.php">viewfeedback</a></button></ul>
    <ul><button><a href="logout.php">logout</a></button></ul>
</nav>

<?php 
$name = "";  
$email = "";  
$gender = "";  
$phonenumber = "";  
$name = "";  
$email = "";  
$gender = "";  
$flatno = "";  
$phonenumber = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["name"])) {  
    $nameErr = "Name Field is required";  
  } else {  
    $name = test_input($_POST["name"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
      $nameErr = "Only letters and white space allowed";  
    }  
  }  
    if (empty($_POST["email"])) {  
    $emailErr = "Email field is required";  
  } else {  
    $email = test_input($_POST["email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailErr = "Invalid email format";  
    }  
  }  
  if (empty($_POST["phonenumber"])) {  
    $phonenumber = "";  
  } else {  
    $phonenumber = test_input($_POST["phonenumber"]);  
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$phonenumber)) {  
      $phonenumberErr = "Invalid URL";  
    }  
  }  
  if (empty($_POST["flatno"])) {  
    $flatno = "";  
  } else {  
    $flatno = test_input($_POST["flatno"]);  
  }  
  if (empty($_POST["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gender = test_input($_POST["gender"]);  
  }  
}  
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  

<h1>  update Form </h1>  
<div class ="editpage">
<div class="input_field">
<label>name</label>
<input type="text" value="<?php echo $result['name'];?>"  class="input" name="name">

</div>
<div class ="editpage">
<div class="input_field">
<label>email</label>
<input type="text" value="<?php echo $result['email'];?>"class="input" name="email">
</div>
<div class ="editpage">
<div class="input_field">
<label>phonenumber</label>
<input type="text" value="<?php echo $result['phonenumber'];?>"class="input" name="phonenumber" >
</div>
<div class ="editpage">
<div class="input_field">
<label>flatno</label>
<input type="text" value="<?php echo $result['flatno'];?>" class="input" name="flatno">
</div>

  <br> <br>  
 <b> Select Gender: </b>  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male  
       
  <br> <br>  
  <input type="submit" class="btn" name="submit"  value="submit">    
  
</body>  
</html>  

<?php
  if($_POST['submit']);
  {
    $name=empty(($_POST['name']));
    $email=($_POST['email']);
    $phonenumber=($_POST['phonenumber']);
    $flatno=($_POST['flatno']);
    $gender=isset($_POST['gender']);

      $query="UPDATE registration set name='$name',email='$email',phonenumber='$phonenumber',flatno='$flatno',gender='$gender' where id='$id'";
  
    $data=mysqli_query($conn,$query);
    
    if($data)
    {
      
      echo "data inserted";

    }
    
    else
    {
      echo"failed update";
    }
  }
?>