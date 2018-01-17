<?php
require 'init.php';
$table_name = "user_info";
$name = $_POST["user"];
$colname = 'username';
$sql_query = "insert into $table_name($col) values('$name'); ";
if(mysqli_query($databaseconnection,$sql_query)){
//echo "<br>Data insertion Success";
}else {
//  echo "<br>DataInsertionEroor..".mysqli_error($databaseconnection);
}
 ?>
