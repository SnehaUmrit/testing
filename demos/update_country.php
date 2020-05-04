
<!DOCTYPE HTML>
<html>
<head>
  <title>Update Country Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_country.php" method="POST">

 <header><h1>COUNTRY TABLE</h1></header>
  
    <label>Country Id</label>
    <input type="text" name="country_id" required>
    <br><br>
  
    <label>Country</label>
    <input type="text" name="country" required>
   <br><br>
  
    <input class= "submit" type="submit" name="submit" value="Update">

    <input type=button onClick="location.href='country.php'" value='Back'>
    <br><br>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){

  $country_id = $_POST['country_id'];
  $country = $_POST['country'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql =( "UPDATE country SET country = '$country' ,last_update ='$last_update'  WHERE country_id='$country_id'" );
    
    
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