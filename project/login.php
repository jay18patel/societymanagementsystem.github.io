
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<style>
  body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px; 
    background-image: url(images/s1.jpg);
    background-size: cover; 
}  

</style>
</head>
<body>


</body>
</html>
<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];


    $sql="select * from login where username='".$username."' AND password='".$password."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {   

        $_SESSION["username"]=$username;

        header("location:userhome.php");
    }

    elseif($row["usertype"]=="admin")
    {

        $_SESSION["username"]=$username;
        
        header("location:adminhome.php");
    }

    else
    {
        echo "username or password incorrect";
    }

}




?>










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
    </style>
</head>
<body>

<center>

    <h1>Login Form</h1>
    <br><br><br><br>
    <div style="background-color: grey; width: 500px;">
        <br><br>


        <form action="#" method="POST">

    <div>
        <label>username</label>
        <input type="text" name="username" required>
    </div>
    <br><br>

    <div>
        <label>password</label>
        <input type="password" name="password" required>
    </div>
    <br><br>

    <div>
        
        <input type="submit" value="Login">
    </div>


    </form>


    <br><br>
 </div>
</center>

</body>
</html>