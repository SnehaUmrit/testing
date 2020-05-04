<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Store <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_store.php'" value='Insert'>
<?php	
			include 'button.php';
			include 'table.css';    
			include_once 'connect.php';
  			$sql = "SELECT * FROM store";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Store ID</th>"; 
            	echo "<th>Manager Staff ID</th>";
            	echo "<th>Address ID</th>";
            	echo"<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["store_id"]."</td>";
                    echo "<td>".$row["manager_staff_id"]."</td>";
                    echo "<td>".$row["address_id"]."</td>";
                    echo "<td>".$row["last_update"]."</td>";

                    /////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_store.php"><button>Update</button></a>  <a href= " "><button>Delete</button></a> </td>';
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