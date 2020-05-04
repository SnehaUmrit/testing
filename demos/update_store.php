<!DOCTYPE HTML>
<html>
<head>
  <title>Update Store Form </title>
  <link href="update.css" rel="stylesheet">

</head>

<body>
 <form action="update_store.php" method="POST">

 <header><h1>STORE TABLE</h1></header>
 
    <label>Store Id</label><br>
    <input type="text" name="store_id" required>
    <br><br>
    <label>Manager Staff Id</label><br>
    <input type="text" name="manager_staff_id" required>
    <br><br>
    <label>Address Id</label><br>
    <input type="text" name="address_id" required>
    <br><br>
  <input class= "submit" type="submit" name="submit" value="Update">
 
  <input type=button onClick="location.href='store.php'" value='Back'>
  <br><br>

 </form>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $store_id = $_POST['store_id'];
  $manager_staff_id = $_POST['manager_staff_id'];
  $address_id = $_POST['address_id'];
 
    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE store SET manager_staff_id ='$manager_staff_id' ,address_id ='$address_id' ,last_update ='$last_update'  WHERE store_id='$store_id' "); 
    
     
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
