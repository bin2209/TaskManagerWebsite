<?php 
include("../../libs/db_connect.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$id = $_POST['id'];

$ngaymai =  date("Y-m-d H:i:s", time() + 86400);
$sql = 'UPDATE todo

SET ngayhethan = "'.$ngaymai.'" WHERE id='.$id.';
';

$result = mysqli_query($con, $sql);
if($result)
{
	header('Location: '.$_SERVER['REQUEST_URI']);
}else{
	echo 'Data insertion failed: ';
}

?>