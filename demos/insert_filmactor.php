<!DOCTYPE HTML>
<html>
<head>
  <title>Insert Film Actor Form </title>
  <link href="insert.css" rel="stylesheet">
</head>

<body>
 <form action="insert_filmactor.php" method="POST">

 <header><h1>FILM ACTOR TABLE</h1></header>

    <label>Actor Id</label><br>
    <input type="text" name="actor_id" required>
    <br><br>
   
    <label>Film Id</label><br>
   <input type="text" name="film_id" required>
   <br><br>

   <input class= "submit" type="submit" name="submit" value="Insert">
  
   <input type=button onClick="location.href='film_actor.php'" value='Back'>
    <br><br>



<?php

include_once 'connect.php';

if (isset($_POST['submit'])){
  $actor_id= $_POST['actor_id'];
  $film_id= $_POST['film_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = "INSERT INTO film_actor(actor_id,film_id,last_update) VALUES ('$actor_id','$film_id','$last_update')" ;
    
    
    if (mysqli_query($conn, $sql)) {
      echo "<strong>";
      echo "New record created successfully";
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