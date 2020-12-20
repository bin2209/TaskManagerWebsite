<?php 
include("../libs/db_connect.php");
include("../../blogadmin/lib.php"); 
date_default_timezone_set('Asia/Ho_Chi_Minh');

$task = $_POST['task'];
$noidung = $_POST['noidung'];
$trangthai = $_POST['trangthai'];
$user = $_POST['user'];
$ngaytao = date("Y-m-d H:i:s");
$thongkengaytao = date("Y-m-d");
if ($user==""){
	// header('Location: index.php');
} else{
	// THÊM TASK VÀO TODO
	$sql = 'INSERT INTO todo (task, noidung, trangthai, user,star ,stamp, ngaytao,ngayhethan,thongbao,timedinhky,nhanthongbao) VALUES ("'.$task.'","'.$noidung.'","'.$trangthai.'","'.$user.'",0,"none","'.$ngaytao.'",NULL,NULL,NULL,"1")';
	$result = mysqli_query($con, $sql);

	//THÊM VÀO BẢNG THONGKENGAY
	// TÌM LẠI ID VÌ CÓ 2 BIẾN USER + DAY == THÌ THÊM VÀO ID TÌM ĐƯỢC
	$thongkengaytao = date("Y-m-d");
	$found = false;
	$sql = "SELECT * FROM `thongkengay`";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if ($row["user"]== getLoggedMemberID() && $row["ngay"]==$thongkengaytao){
				$found = true;
				$id_thongkengay = $row["id"];
			}
		}
	}
	if ($found == true){
		$sql_thongke = "UPDATE thongkengay SET soluong = soluong + 1 WHERE id='".$id_thongkengay."'";
		$result = mysqli_query($con, $sql_thongke);
	}
} 
// echo $task;
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