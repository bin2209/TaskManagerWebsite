<?php 
include("../../../blogadmin/lib.php");
include("../../libs/db_connect.php");


$id = $_POST["filename"];

if (unlink('../upload/'.$id)){
	$sql= 'DELETE FROM `upload` WHERE filename= "'.$id.'"';
	mysqli_query($con, $sql);
}




?>