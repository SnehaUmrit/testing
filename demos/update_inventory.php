<!DOCTYPE HTML>
<html>
<head>
  <title>Update Inventory Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_inventory.php" method="POST">

 <header><h1>INVENTORY TABLE</h1></header>
 
    <label>Inventory Id:</label><br>
    <input type="text" name="inventory_id" required>
    <br><br>
    <label>Film Id:</label><br>
    <input type="text" name="film_id" required>
    <br><br>
    <label>Store Id</label><br>
    <input type="text" name="store_id" required>
    <br><br>
    <input class= "submit" type="submit" name="submit" value="Update">
  
  <input type=button onClick="location.href='inventory.php'" value='Back'>
  <br><br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $inventory_id = $_POST['inventory_id'];
  $film_id= $_POST['film_id'];
  $store_id= $_POST['store_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE inventory SET film_id = '$film_id',store_id ='$store_id' ,last_update ='$last_update'  WHERE inventory_id = '$inventory_id' ");
       
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
