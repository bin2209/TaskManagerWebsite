<?php
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
$id = $_POST['id'];
$sql = 'UPDATE todo SET timedinhky = NULL, laplai = NULL WHERE id='.$id.';';

$result = mysqli_query($con, $sql);
if($result){
	header('Location: index.php');
}else{
	echo 'Data insertion failed: ';
}


?>