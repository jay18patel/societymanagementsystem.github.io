
<?php
?>
<html>
<head>
  <title></title>
  <style>
   
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



</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>feeedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="MB">
<ul><button><a href="feedback.php">give feedback</a></button></ul>
    <ul><button><a href="logout.php">logout</a></button></ul>
</nav>
   
    </div>
  </div>
</nav>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  uploadData();
}
function uploadData(){
if($_SERVER["REQUEST_METHOD"]=="POST")

  $Flatno=$_POST['Flatno'];
  $feedback=$_POST['feedback'];
}

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
<div class="container mt-5">
  <h1> enter your feedback </h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="mb-3">
  <label for="Flatno" class="form-label">Flatno</label>
  <input type="Flatno" name="Flatno" class="form-control" id="Flatno">
</div>
<div class="mb-3">
  <label for="feedback" class="form-label">feedback</label>
  <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
</div>
    

  <input type="submit" class="btn" name="submit"  value="submit">    
</form>
</div>
    
  </body>
</html>



<?php
if ($_POST['submit']);
  {
    $Flatno=($_POST['Flatno']);
    $feedback=($_POST['feedback']);
    $query="INSERT INTO feedback (Flatno,feedback)values('$Flatno','$feedback')";
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
?>
