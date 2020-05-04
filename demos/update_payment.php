<!DOCTYPE HTML>
<html>
<head>
  <title>Update Payment Form </title>
  <link href="update.css" rel="stylesheet">

</head>

<body>
 <form action="update_payment.php" method="POST">

 <header><h1>PAYMENT TABLE</h1></header>

<label>Payment Id</label><br>
<input type="text" name="payment_id" required>
<br><br>
<label>Customer Id</label><br>
<input type="text" name="customer_id" required>
<br><br>
<label>Staff Id</label><br>
<input type="text" name="staff_id" required>
<br><br>
<label>Rental Id</label><br>
><input type="text" name="rental_id" required>
<br><br>
<label>Amount</label><br>
<input type="text" name="amount" required>
<br><br>
<label>Payment Date</label><br>
<input type="datetime-local" name="payment_date" placeholder= "yyyy-mm-dd hh:mm:ss" required>
<br><br>
<input class= "submit" type="submit" name="submit" value="Update">
<input type=button onClick="location.href='payment.php'" value='Back'>
<br><br>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $payment_id= $_POST['payment_id'];
  $customer_id= $_POST['customer_id'];
  $staff_id= $_POST['staff_id'];
  $rental_id= $_POST['rental_id'];
  $amount= $_POST['amount'];
  $payment_date= $_POST['payment_date'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = ("UPDATE payment SET customer_id ='$customer_id' ,staff_id ='$staff_id' ,rental_id = '$rental_id',amount ='$amount' ,payment_date = '$payment_date',last_update = '$last_update' WHERE payment_id = '$payment_id' ");
    
    
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