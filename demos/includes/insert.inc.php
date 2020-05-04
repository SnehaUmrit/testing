<?php

    include_once 'dbh.inc.php';
  
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['category_id'];
$email = $_POST['name'];
$contact = $_POST['last_update'];

if($category_id !=''|| $name !=''){


    //Insert Query of SQL
$query = mysql_query("INSERT INTO category(category_id,name,last_update) VALUES ('$category_id', '$name', '$last_update');");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
//mysql_close($conn); // Closing Connection with Server

?>
