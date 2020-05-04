<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
            <?php
                $sql = "SELECT * FROM address;";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                echo $row['address_id']." ".$row['address'] ." ".$row['address2']. " ".  $row['last_update']."<br>" ;
                //echo $row['last_name'] . "<br>" ;
             }

            }
            ?>
            
</body>
</html>