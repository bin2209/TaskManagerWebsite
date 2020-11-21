<?php 
include("../libs/db_connect.php");
$id = $_POST['id'];
$data = $_POST['data'];


$id = ltrim($id, 'drag');
$data = ltrim($data, 'stamp');

$sql = 'UPDATE todo
SET stamp = "'.$data.'" WHERE id='.$id.';
';

$result = mysqli_query($con, $sql);
if($result)
{
	header('Location: index.php');
}else{
	echo 'Data insertion failed: ';
}

?>