<!DOCTYPE HTML>
<html>
<head>
  <title>Update Customer Form </title>
  <link href="update.css" rel="stylesheet">
</head>

<body>
 <form action="update_customer.php" method="POST">

 <header><h1>CUSTOMER TABLE</h1></header>

    <label>Customer Id</label><br>
    <input type="text" name="customer_id" required>
    <br><br>
   
    <label>Store Id</label><br>
    <input type="text" name="store_id" required>
    <br><br>
   
    <label>First Name</label><br>
    <input type="text" name="first_name" required>
    <br><br>

    <label>Last Name</label><br>
    <input type="text" name="last_name" required>
   <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
   <br><br>

    <label>Address Id</label><br>
    <input type="text" name="address_id" required>
    <br><br>

    <label>Active</label><br>
    <input type="number" name="active" min="0" max="1" required>
   <br><br>

    <label>Create date</label><br>
    <input type="datetime-local" name="create_date" placeholder= "yyyy-mm-dd hh:mm:ss"  required>
    <br><br>

    <input class= "submit" type="submit" name="submit" value="Update">

    <input type=button onClick="location.href='customer.php'" value='Back'>
    <br><br>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){

  $customer_id = $_POST['customer_id'];
  $store_id = $_POST['store_id'];
  $first_name = $_POST['first_name'];
  $last_name= $_POST['last_name'];
  $email= $_POST['email'];
  $address_id= $_POST['address_id'];
  $active = $_POST['active'];
  $create_date = $_POST['create_date'];
 
    //$create_date = date('Y-m-d H:i:s',filectime("insert_customer.php"));
    $last_update = date('Y-m-d H:i:s');
    
    $sql = ("UPDATE customer SET store_id = '$store_id',first_name = '$first_name',last_name = '$last_name',email = '$email',address_id = '$address_id' ,active = '$active',create_date = '$create_date',last_update ='$last_update'  WHERE customer_id= '$customer_id'");
     
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