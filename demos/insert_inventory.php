<!DOCTYPE HTML>
<html>
<head>
  <title>Insert Inventory Form </title>
  <link href="insert.css" rel="stylesheet">

</head>

<body>
 <form action="insert_inventory.php" method="POST">

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
    <input class= "submit" type="submit" name="submit" value="Insert">
  
  <input type=button onClick="location.href='inventory.php'" value='Back'>
  <br><br>
<?php
include_once 'connect.php';

if (isset($_POST['submit'])){
  $inventory_id = $_POST['inventory_id'];
  $film_id= $_POST['film_id'];
  $store_id= $_POST['store_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = "INSERT INTO inventory(inventory_id,film_id,store_id,last_update) VALUES ('$inventory_id','$film_id','$store_id','$last_update')" ;
    
    
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
