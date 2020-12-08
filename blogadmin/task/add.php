<?php 
include("../libs/db_connect.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');

$task = $_POST['task'];
$noidung = $_POST['noidung'];
$trangthai = $_POST['trangthai'];
$user = $_POST['user'];
$ngaytao = date("Y-m-d H:i:s");
if ($user==""){
	header('Location: index.php');
} else{
	$sql = 'INSERT INTO todo (task, noidung, trangthai, user,star ,stamp, ngaytao,ngayhethan,thongbao,timedinhky,nhanthongbao) VALUES ("'.$task.'","'.$noidung.'","'.$trangthai.'","'.$user.'",0,"none","'.$ngaytao.'",NULL,NULL,NULL,"0")';
	$result = mysqli_query($con, $sql);

} 
echo $task;
//insert data into table



// mysqli_query($con,$sql);
if($result)
{
	header('Location: index.php');
}else{
	echo 'Data insertion failed: ';
	echo 1;
}
?>