<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Payment <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_payment.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';
			include_once 'connect.php';
  			$sql = "SELECT * FROM payment";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Payment ID</th>"; 
            	echo "<th>Customer ID</th>";
            	echo "<th>Staff ID</th>";
            	echo "<th>Rental ID</th>";
            	echo "<th>Amount</th>";
              	echo "<th>Payment Date</th>";
               	echo "<th>Last Update</th>";
               	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
        	    while($row = $result->fetch_assoc()) {
                	echo "<tr>";
                    echo "<td>".$row["payment_id"]."</td>";
                    echo "<td>".$row["customer_id"]."</td>";
                    echo "<td>".$row["staff_id"]."</td>";
                    echo "<td>".$row["rental_id"]."</td>";
                    echo "<td>".$row["amount"]."</td>";
                    echo "<td>".$row["payment_date"]."</td>";
					echo "<td>".$row["last_update"]."</td>";
					
					/////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_payment.php"><button>Update</button></a>  <a href=" " ><button>Delete</button></a> </td>';
                    echo "</tr>";
                }
        }       
        else {
                echo "0 results";
        }
            
     	$conn->close();
?>           

 </body>
</html>