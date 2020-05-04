<!DOCTYPE HTML>
<html>
<head>
  <title>Update City Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_city.php" method="POST">

 <header><h1>CITY TABLE</h1></header>
 
    <label>City Id</label><br>
    <input type="text" name="city_id" required>
    <br><br>
  
    <label>City</label><br>
    <input type="text" name="city" required>
    <br><br>
  
    <label>Country Id:</label><br>
    <input type="text" name="country_id" required>
    <br><br>
   
  
    <input class= "submit" type="submit" name="submit" value="Update">
    <input type=button onClick="location.href='city.php'" value='Back'>
    <br><br>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $city_id = $_POST['city_id'];
  $city = $_POST['city'];
  $country_id = $_POST['country_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE city SET city ='$city' ,country_id ='$country_id' ,last_update= '$last_update' WHERE city_id = '$city_id'") ;
    
    
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