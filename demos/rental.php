<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Rental <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_rental.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';			
			include_once 'connect.php';
  			$sql = "SELECT * FROM rental";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Rental ID</th>"; 
            	echo "<th>Rental Date</th>";
            	echo "<th>Inventory ID</th>";
            	echo "<th>Customer ID</th>";
            	echo "<th>Return Date</th>";
              	echo "<th>Staff ID</th>";
               	echo "<th>Last Update</th>";
               	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
        	    while($row = $result->fetch_assoc()) {
                	echo "<tr>";
                    echo "<td>".$row["rental_id"]."</td>";
                    echo "<td>".$row["rental_date"]."</td>";
                    echo "<td>".$row["inventory_id"]."</td>";
                    echo "<td>".$row["customer_id"]."</td>";
                    echo "<td>".$row["return_date"]."</td>";
                    echo "<td>".$row["staff_id"]."</td>";
					echo "<td>".$row["last_update"]."</td>";
					

                    echo '<td><a href="update_rental.php"><button>Update</button></a>  <a href= " "><button>Delete</button></a> </td>';
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