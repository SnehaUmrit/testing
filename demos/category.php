<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Category <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_category.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';     			
			include_once 'connect.php';
  			$sql = "SELECT * FROM category";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Category ID</th>"; 
                echo "<th>Name</th>";
            	echo "<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["category_id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["last_update"]."</td>";

                    /////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_category.php"><button>Update</button></a>  <a href= " "><button>Delete</button></a> </td>';
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