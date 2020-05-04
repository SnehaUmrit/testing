<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Address <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_address.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';           			
			include_once 'connect.php';
  			$sql = "SELECT * FROM address";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Address ID</th>"; 
            	echo "<th>Address</th>";
            	echo "<th>Address 2</th>";
            	echo "<th>District</th>";
            	echo "<th>City ID</th>";
            	echo "<th>Postal Code</th>";
            	echo "<th>Phone</th>";
            	echo "<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
        	    while($row = $result->fetch_assoc()) {
                	echo "<tr>";
                    echo "<td>".$row["address_id"]."</td>";
                    echo "<td>".$row["address"]."</td>";
                    echo "<td>".$row["address2"]."</td>";
                    echo "<td>".$row["district"]."</td>";
                    echo "<td>".$row["city_id"]."</td>";
                    echo "<td>".$row["postal_code"]."</td>";
                    echo "<td>".$row["phone"]."</td>";
					echo "<td>".$row["last_update"]."</td>";
					
					/////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_address.php"><button>Update</button></a>  <a href="  "><button>Delete</button></a> </td>';
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