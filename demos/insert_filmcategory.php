<!DOCTYPE HTML>
<html>
<head>
  <title>Insert Film Category Form </title>
  <link href="insert.css" rel="stylesheet">
</head>


</style>
<body>
 <form action="insert_filmcategory.php" method="POST">

 <header><h1>FILM CATEGORY TABLE</h1></header>
 
    <label>Film Id</label><br>
    <input type="text" name="film_id" required>
   <br><br>

    <label>Category Id</label><br>
   <input type="text" name="category_id" required>
   <br><br>
 
    <input class= "submit" type="submit" name="submit" value="Insert">
  
  <input type=button onClick="location.href='film_category.php'" value='Back'>
  <br><br>

<?php

include_once 'connect.php';

if (isset($_POST['submit'])){
  $film_id = $_POST['film_id'];
  $category_id= $_POST['category_id'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = "INSERT INTO film_category(film_id,category_id,last_update) VALUES ('$film_id','$category_id','$last_update')" ;
    
    
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
