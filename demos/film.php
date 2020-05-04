<html>
<body>
<h1><img src="pokeball.jpg" width = "60" height = "60" style="vertical-align:bottom"> Film <img src="pikachu.gif" width = "110" height = "80" style="vertical-align:bottom"></h1>
<input type=button onClick="location.href='insert_film.php'" value='Insert'>
<?php	
            include 'button.php';
			include 'table.css';         
			include_once 'connect.php';
  			$sql = "SELECT * FROM film";
        	$result = $conn->query($sql);

            if ($result->num_rows > 0) {
            	echo "<table>";
            	echo "<tr>";
            	echo "<th>Film ID</th>"; 
            	echo "<th>Title</th>";
            	echo "<th>Description</th>";
            	echo "<th>Release Year</th>";
            	echo "<th>Language ID</th>";
            	echo "<th>Original Language ID</th>";
            	echo "<th>Rental Duration</th>";
            	echo "<th>Rental Rate</th>";
            	echo "<th>Length</th>";
            	echo "<th>Replacement Cost</th>";
            	echo "<th>Rating</th>";
            	echo "<th>Special Features</th>";
            	echo "<th>Last Update</th>";
            	echo "<th>Option</th>";
            	echo "</tr>";
            	
                // output data of each row
        	    while($row = $result->fetch_assoc()) {
                	echo "<tr>";
                    echo "<td>".$row["film_id"]."</td>";
                    echo "<td>".$row["title"]."</td>";
                    echo "<td>".$row["description"]."</td>";
                    echo "<td>".$row["release_year"]."</td>";
                    echo "<td>".$row["language_id"]."</td>";
                    echo "<td>".$row["original_language_id"]."</td>";
                    echo "<td>".$row["rental_duration"]."</td>";
                    echo "<td>".$row["rental_rate"]."</td>";
                    echo "<td>".$row["length"]."</td>";
                    echo "<td>".$row["replacement_cost"]."</td>";
                    echo "<td>".$row["rating"]."</td>";
                    echo "<td>".$row["special_features"]."</td>";
					echo "<td>".$row["last_update"]."</td>";
					

					/////////////////////////////////////////////////////////////////////////to add the filename for delete button
                    echo '<td><a href="update_film.php"><button>Update</button></a>  <a href=" "><button>Delete</button></a> </td>';
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