<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Staff <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_staff.php'" value='Insert'>
<?php	
			include 'button.php';
			include 'table.css';
			include_once 'connect.php';
  			$sql = "SELECT * FROM staff";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Staff ID</th>"; 
            	echo "<th>First Name</th>";
            	echo "<th>Last Name</th>";
            	echo "<th>Address ID</th>";
            	echo "<th>Picture</th>";
              	echo "<th>Email</th>";
   	           	echo "<th>Store ID</th>";
            	echo "<th>Active</th>";
            	echo "<th>Username</th>";
              	echo "<th>Password</th>";
               	echo "<th>Last Update</th>";
               	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
        	    while($row = $result->fetch_assoc()) {
                	echo "<tr>";
                    echo "<td>".$row["staff_id"]."</td>";
                    echo "<td>".$row["first_name"]."</td>";
                    echo "<td>".$row["last_name"]."</td>";
                    echo "<td>".$row["address_id"]."</td>";
                    echo "<td>".$row["picture"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["store_id"]."</td>";
                    echo "<td>".$row["active"]."</td>";
                    echo "<td>".$row["username"]."</td>";
                    echo "<td>".$row["password"]."</td>";
					echo "<td>".$row["last_update"]."</td>";
					
					/////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_staff.php"><button>Update</button></a>  <a href=" " ><button>Delete</button></a> </td>';
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