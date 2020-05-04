<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Inventory <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_inventory.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';    
			include_once 'connect.php';
  			$sql = "SELECT * FROM inventory";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Inventory ID</th>"; 
            	echo "<th>Film ID</th>";
            	echo "<th>Store ID</th>";
            	echo "<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["inventory_id"]."</td>";
                    echo "<td>".$row["film_id"]."</td>";
                    echo "<td>".$row["store_id"]."</td>";
                    echo "<td>".$row["last_update"]."</td>";

                    /////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_inventory.php"><button>Update</button></a>  <a href= " "><button>Delete</button></a> </td>';
                    echo "</tr>";
                    
                }
                
                echo"</table>";
            }
            
        else {
            echo "0 results";
        }
            
     		$conn->close();
?>

</body>
</html>