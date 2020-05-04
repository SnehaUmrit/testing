<!DOCTYPE HTML>
<html>
<head>
  <title>Update Film Actor Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_filmactor.php" method="POST">
 <header><h1>FILM ACTOR TABLE</h1></header>

<label>Actor Id</label><br>
<input type="text" name="actor_id" required>
<br><br>

<label>Film Id</label><br>
<input type="text" name="film_id" required>
<br><br>

<input class= "submit" type="submit" name="submit" value="Update">

<input type=button onClick="location.href='film_actor.php'" value='Back'>
<br><br>




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $actor_id= $_POST['actor_id'];
  $film_id= $_POST['film_id'];

  

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE film_actor SET film_id = '$film_id',last_update = '$last_update' WHERE actor_id ='$actor_id'");
    
    if (mysqli_query($conn, $sql)) {
      echo "<strong>"; 
      echo "Data Updated Successfuly";
      echo "</strong>";
    } else {

      echo "<strong>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "</strong>";
    }
}
mysqli_close($conn);
?>
 </form>
</body>
</html>