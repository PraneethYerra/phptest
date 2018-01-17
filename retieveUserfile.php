<?php
require 'init.php';
$query = "select * from user_info";
$result = mysqli_query($databaseconnection,$query);
if (mysqli_num_rows($result)>0) {
$row = mysqli_fetch_assoc($result);
$name = $row['username'];
echo"<br>we have $name";
  }else {
    echo "<br>No info available";
  }

 ?>
