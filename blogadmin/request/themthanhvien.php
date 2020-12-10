<?php 
include("../libs/db_connect.php");

$id = $_POST['id'];
$value = $_POST['value'];

$sql = 'UPDATE blogs
SET member = "'.$value.'" WHERE id='.$id.';
';

$result = mysqli_query($con, $sql);
// if($result)
// {
// 	header('Location: index.php');
// }else{
// 	echo 'Data insertion failed: ';
// }


?>