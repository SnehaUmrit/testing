<!DOCTYPE HTML>
<html>
<head>
  <title>Update Rental Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_rental.php" method="POST">

 <header><h1>RENTAL TABLE</h1></header>
 
    <label>Rental Id</label><br>
   <input type="text" name="rental_id" required>
   <br><br>
    <label>Rental Date</label><br>
    <input type="datetime-local" name="rental_date" required>
    <br><br>
    <label>Inventory Id</label><br>
   <input type="text" name="inventory_id" required>
   <br><br>
    <label>Customer Id</label><br>
    <input type="text" name="customer_id" required>
    <br><br>
    <label>Return Date</label><br>
    <input type="datetime-local" name="return_date" placeholder= "yyyy-mm-dd hh:mm:ss" required>
    <br><br>
    <label>Staff Id</label><br>
    <input type="text" name="staff_id" required>
    <br><br>
   <input class= "submit" type="submit" name="submit" value="Update">
 
 <input type=button onClick="location.href='rental.php'" value='Back'>
 <br><br>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $rental_id = $_POST['rental_id'];
  $rental_date = $_POST['rental_date'];
  $inventory_id = $_POST['inventory_id'];
  $customer_id = $_POST['customer_id'];
  $return_date = $_POST['return_date'];
  $staff_id = $_POST['staff_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE rental SET rental_date = '$rental_date' ,inventory_id = '$inventory_id'  ,customer_id ='$customer_id' ,return_date ='$return_date' ,staff_id ='$staff_id' ,last_update ='$last_update'  WHERE rental_id = '$rental_id' ");  
  
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