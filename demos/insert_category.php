<html>
<head>
  <title>Insert category Form</title>
  <link href="insert.css" rel="stylesheet">
</head>

</style>
<body>
 <form action="insert_category.php" method="POST">

 <header><h1>CATEGORY TABLE</h1></header>
  
    <label>Category Id</label><br>
    <input class="input" type="text" name="category_id" required>
    <br><br>
   
    <label>Name</label>
    <td><input class= "input" type="text" name="name" required></td>
    <br><br>
    
    <input class= "submit" type="submit" name="submit" value="Insert">
  
   <input type=button onClick="location.href='category.php'" value='Back'>
    <br><br>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])){
  $category_id = $_POST['category_id'];
  $name = $_POST['name'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = "INSERT INTO category(category_id,name,last_update) VALUES ('$category_id','$name', '$last_update')" ;
    
    if (mysqli_query($conn, $sql)) {
      echo "<strong>";
      echo "New record created successfully";
      echo "</strong>";

    } else {
      echo "<strong>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "</strong>";
    }
}
mysqli_close($conn);

?>
</form>
</body>
</html>
