<!DOCTYPE HTML>
<html>
<head>
  <title>Update Actor Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_actor.php" method="POST">

 <header><h1>ACTOR TABLE</h1></header>
  
    <label>Actor Id</label><br>
    <input class= "input" type="text" name="actor_id" required>
    <br><br>
  
    <label>First Name</label><br>
    <input class= "input" type="text" name="first_name" required>
    <br><br>

    <label>Last Name</label><br>
    <input class= "input" type="text" name="last_name" required>
    <br><br>
  
    <input class= "submit" type="submit" name="submit" value="Update">
   
   <input type=button onClick="location.href='actor.php'" value='Back'>
   <br><br>

<?php

include_once 'connect.php';

if (isset($_POST['submit'])){
  $actor_id = $_POST['actor_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE actor SET first_name = '$first_name' ,last_name ='$last_name' ,last_update = '$last_update' WHERE actor_id = '$actor_id'") ;
     
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
