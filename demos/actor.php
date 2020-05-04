<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Actor <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_actor.php'" value='Insert'>
<link href="table.css" rel="stylesheet">

<?php 
            include 'button.php';
                      
			include_once 'connect.php'; 		
 			$sql = "SELECT * FROM actor";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Actor ID</th>"; 
            	echo "<th>First Name</th>"; 
            	echo "<th>Last Name</th>";
            	echo "<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["actor_id"]."</td>";
                    echo "<td>".$row["first_name"]."</td>";
                    echo "<td>".$row["last_name"]."</td>";
                    echo "<td>".$row["last_update"]."</td>";

                    /////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_actor.php"><button>Update</button></a>  <a href="deletefilename.php"><button>Delete</button></a> </td>';
                     
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