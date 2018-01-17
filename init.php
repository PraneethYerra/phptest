<?php
$databsename = "chatappdatabase";
$servername = 'localhost';
$username = 'root';
$password = '';
$databaseconnection = mysqli_connect($servername,$username,$password,$databsename);
if ($databaseconnection) {
//  echo "connectionSuccess";
  # code...
}else {
  //echo "Connection Error ...".mysqli_connect_error();
}

 ?>
