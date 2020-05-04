<!DOCTYPE html>

<html>

<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Delete Actor <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<form action = 'delete_actor.php'>
    <input type = button onClick = "location.href='actor.php'" value = 'Back'>  
</form>
    <?php 
            
            include 'table.css';           
			include_once 'connect.php'; 		
 			$sql = "SELECT * FROM actor";
            $result = $conn->query($sql);
            $deleteForm = "<form action ='delete_actor.php'>\n
                              <input type = 'hidden' name = 'delete' value='$row[actor_id]'>\n
                              <button name = 'Delete' value = 'Delete' type = 'submit'>Delete</button>\n
                           </form>\n";
    

    
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

                    $deleteForm = "<form action = 'delete_actor.php' method='POST'>\n
                                       <input type = 'hidden' name = 'delete' value='
                                       <?php echo $row[actor_id]; ?>'>\n
                                       <button name = 'Delete' value = 'Delete' type = 'submit'>Delete</button>\n
                                     </form>\n";
                    echo "<tr>";
                    echo "<td>".$row["actor_id"]."</td>";
                    echo "<td>".$row["first_name"]."</td>";
                    echo "<td>".$row["last_name"]."</td>";
                    echo "<td>".$row["last_update"]."</td>";
                    echo "<td>".$deleteForm."</td>";
                                   
                    echo "</tr>";           
                }
                echo"</table>";
            }
            
            else {
                echo "0 results";
            }
                        
if (isset($_POST['delete'])){
    $delete = $_POST['delete'];
    $sql = ("DELETE FROM actor WHERE actor_id = $delete");

      if (mysqli_query($conn, $sql)) {
          echo "Successfully deleted";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }
  mysqli_close($conn);
  
  ?>
</body>

</html>