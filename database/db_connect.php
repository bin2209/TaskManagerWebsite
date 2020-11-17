<?php
include 'mainsetting.php';
$con=mysqli_connect("".$db_host."","".$db_user."","".$db_pass."","".$db_name."");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>