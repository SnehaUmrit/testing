<!DOCTYPE HTML>
<html>
<head>
  <title>Insert Language Form </title>
  <link href="insert.css" rel="stylesheet">

</head>

<body>
 <form action="insert_language.php" method="POST">

 <header><h1>LANGUAGE TABLE</h1></header>

    <label>Language Id</label><br>
   <input type="text" name="language_id" required>
   <br><br>

    <label>Name</label><br>
    <input type="text" name="name" required>
    <br><br>

    <input class= "submit" type="submit" name="submit" value="Insert">
  
  <input type=button onClick="location.href='language.php'" value='Back'>
  <br><br>
 

<?php

include_once 'connect.php';

if (isset($_POST['submit'])){

  $language_id= $_POST['language_id'];
  $name= $_POST['name'];

    $last_update = date('Y-m-d H:i:s');
    //Insert query 
    $sql = "INSERT INTO language(language_id,name,last_update) VALUES ('$language_id','$name','$last_update')" ;
    
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

